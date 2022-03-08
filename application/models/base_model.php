<?php

/**
 * @author
 * @copyright 2015-05
 */
class base_model extends CI_Model {

    function __construct() {
        parent::__construct('');
        $this->load->model();
        $this->route = $this->router->class;
    }

    public function sendMail($listMails, $content, $contentsave, $subject) {
        $url = str_replace('models', 'libraries', dirname(__FILE__));
        require_once($url.'/sendmail/libs/PHPMailer/PHPMailerAutoload.php');
        $mail = new \PHPMailer;
        // $mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->CharSet = "utf-8";                                      // Set mailer to use SMTP
        $mail->Host = '103.15.48.222';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'lhwork@vieclammiennam.vn';                 // SMTP username
        $mail->Password = 'MFm,&92!XOF2';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->setFrom('lhwork@vieclammiennam.vn', 'LH Work');
        if (count($listMails)) {
            foreach ($listMails as $itemMail => $itemAlias) {
                $mail->addAddress($itemAlias, $itemAlias);
            }
        }
        $mail->addBCC('vuanhtuan3113@gmail.com', 'Tuan Vu');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $content;
        $statusSend = $mail->Send();
        // if(!$mail->Send())
        // {
        //     echo 'Message could not be sent. <p>';
        //     echo 'Mailer Error: ' . $mail->ErrorInfo;
        //     exit;
        // }
        return $statusSend;
    }

    public function getPermission($login, $route) {
        $right = '';
        if (isset($login->params[$route])) {
            $right = json_encode($login->params[$route]);
        }
        return json_decode($right, true);
    }

    public function getallGroup() {
        $sql = " SELECT id, groupname, parentid
				FROM gds_stock_groups AS g
				WHERE g.isdelete = 0
				ORDER BY groupname ASC ";
        $query = $this->model->query($sql)->execute();
        return $query;
    }

    public function getMacAddress() {
        $ip = $_SERVER['REMOTE_ADDR'];
        $mac = shell_exec("arp -a $ip");
        $arr = explode(" ", $mac);
        if (isset($arr[3])) {
            $macAddress = $arr[3];
        } else {
            $macAddress = $ip;
        }
        return $macAddress;
    }

    public function getGroup() {
        $query = $this->model->table('gdt_groups')
                ->select('id,groupname')
                ->where('isdelete', 0);
        $query = $query->find_all();
        return $query;
    }

    function findID($table, $id) {
        $query = $this->model->table($table)
                ->where('isdelete', 0)
                ->where('id', $id)
                ->find();
        return $query;
    }

    function getConfig($table = "gdt_config", $name = "") {
        if (empty($name)) {
            $query = $this->model->table($table)->where('is_delete', 0)->find_all();
        } else {
            $query = $this->model->table($table)->where('is_delete', 0)->where('name', $name)->find_all();
        }
        return $query;
    }

    function paging($count, $rows = 1, $links = 5, $page = 1) {
        if ($rows == NULL)
            $rows = 2;
        if ($links == NULL)
            $links = 5;
        $tmp = (int) ($links / 2);
        $totalPage = (int) ($count / $rows);
        if (($totalPage * $rows) < $count)
            $totalPage = $totalPage + 1;

        if ($page <= ($tmp + 1))
            $startPage = 1;
        else
            $startPage = $page - $tmp;

        if ($totalPage - $page <= $tmp)
            $endPage = $totalPage;
        else
            $endPage = $page + $tmp;

        if ($endPage - $startPage + 1 < $links)
            $endPage = $links + $startPage - 1;
        if ($endPage > $totalPage) {
            $startPage = $startPage + $totalPage - $endPage;
            $endPage = $totalPage;
            if ($startPage <= 1)
                $startPage = 1;
        };
        $html = "";
        $cur_page = $page;
        $html .= '<nav aria-label="Page navigation">';
        $html .= '<ul class="pagination">';
        if ($page - 1 <= 0) {
            $page_pre = 1;
        }
        else {
            $page_pre = ($page - 1);
        }
        if ($page + 1 > $endPage) {
            $page_next = $endPage;
        }
        else {
            $page_next = ($page + 1);
        }
        $html .= '<li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="getDataPage(' . ($page_pre) . ')">Previous</a></li>';
        for ($i = $startPage; $i <= $endPage; $i++) {
            $page_active = "";
            if ($i == $cur_page) {
                $page_active = 'active';
            }
            $html .= '<li class="page-item '.$page_active.'"><a class="page-link" href="javascript:void(0);" onclick="getDataPage('.$i.')" page="' . $i . '">'. $i .'</a></li>';
        }
        $html .= '<li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="getDataPage(' . ($page_next) . ')">Next</a></li>';
        $html .= "</ul>";
        $html .= "</nav>";
        return $html;
    }
}?>