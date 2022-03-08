<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author Son Nguyen
 * @copyright 2015
 */
include(BASEPATH . 'core/Template' . EXT);

class Admin extends CI_Template {

    var $config;
    var $time_exit = 0;
    var $CI;
    var $lang = 'vn';
    var $session_name;
    var $login;

    function __construct() {
        parent::__construct('admin', 'default');
        $this->session_name = 'gdt';
        $this->set_master_template();
        $lang = "";
        $this->getSession('langs');
        $login = $this->CI->session->userdata('login_' . $this->session_name);
        $route = $this->CI->router->class;
        if (strtolower($route) != 'authorize') {
            if (!isset($login->username)) {
                redirect(base_url());
            }
        }
        $this->lang = $lang;
        $this->add_region('copyright');
        $this->add_region('lang');
        $this->write('lang', $lang, true);
    }

    function setTemplate($name) {
        $this->set_master_template($name);
    }

    function createCookie($cookie_name, $cookie_data, $cookie_time, $type = 'd') {
        switch ($type) {
            case 's':
                $time = $cookie_time;
                break;
            case 'm':
                $time = $cookie_time * 60;
                break;
            case 'h':
                $time = $cookie_time * 3600;
                break;
            case 'd':
                $time = $cookie_time * 86400;
                break;
            case 'w':
                $time = $cookie_time * 86400 * 7;
                break;
            case 'M':
                $time = $cookie_time * 2678400;
                break;
            default:
                $time = $cookie_time * 32140800;
        }

        $domain = $this->CI->config->item('cookie_domain');
        $path = $this->CI->config->item('cookie_path');
        setcookie('cookie_' . $cookie_name . '_' . $this->session_name, $cookie_data, time() + $time, $path, $domain, 0);
    }

    function setCookie($cookie_name, $cookie_data) {
        $_COOKIE['cookie_' . $cookie_name . '_' . $this->session_name] = $cookie_data;
    }

    function nameCookie($cookie_name) {
        return 'cookie_' . $cookie_name . '_' . $this->session_name;
    }

    function getCookie($cookie_name) {
        return (isset($_COOKIE['cookie_' . $cookie_name . '_' . $this->session_name]) ? $_COOKIE['cookie_' . $cookie_name . '_' . $this->session_name] : "");
    }

    function deleteCookie($cookie_name) {
        $domain = $this->CI->config->item('cookie_domain');
        $path = $this->CI->config->item('cookie_path');
        setCookie('cookie_' . $cookie_name . '_' . $this->session_name, '', 0, $path, $domain, 0);
    }

    function setSession($name, $value) {
        $this->CI->session->set_userdata($name . '_' . $this->session_name, $value);
    }

    function setFlashData($name, $value) {
        $this->CI->session->set_flashdata($name . '_' . $this->session_name, $value);
    }

    function getFlashData($name) {
        return $this->CI->session->flashdata($name . '_' . $this->session_name);
    }

    function getSession($name) {
        return $this->CI->session->userdata($name . '_' . $this->session_name);
    }

    function deleteSession($name) {
        return $this->CI->session->unset_userdata($name . '_' . $this->session_name);
    }

    function friendlyURL($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        $str = preg_replace("/( |'|,|\||\.|\"|\?|\/|\%|–|!)/", '-', $str);
        $str = preg_replace("/(\()/", '-', $str);
        $str = preg_replace("/(\))/", '-', $str);
        $str = preg_replace("/(&)/", '-', $str);
        $str = str_replace("+", "-", $str);
        $str = str_replace(",", "-", $str);
        $str = str_replace("_", "-", $str);
        return strtolower($str);
    }

    function friendlyURLsite($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        $str = preg_replace("/( |'|,|\||\.|\"|\?|\/|\%|–|!)/", '-', $str);
        $str = preg_replace("/(\()/", '-', $str);
        $str = preg_replace("/(\))/", '-', $str);
        $str = preg_replace("/(&)/", '-', $str);
        $str = preg_replace("-----", '-', $str);
        $str = preg_replace("----", '-', $str);
        $str = preg_replace("---", '-', $str);
        $str = preg_replace("--", '-', $str);
        return strtolower($str);
    }

    function pagination($count, $rows, $links, $task, $page = 0) {
        $CI = & get_instance();
        $config['base_url'] = base_url() . $task;
        $config['total_rows'] = $count;
        $config['per_page'] = $rows;
        $config['num_links'] = $links;

        $num_pages = (!empty($rows)) ? ceil($count / $rows) : 1;
        $cur_page = $page;
        $cur_page = (int) $cur_page;
        if (!is_numeric($cur_page)) {
            $cur_page = 0;
        }
        if ($cur_page > $count) {
            $cur_page = ($num_pages - 1) * $rows;
        }
        $cur_page = floor(($cur_page / $rows) + 1);

        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '<div class="limit">Page ' . $cur_page . ' / ' . ceil($count / $rows) . '</div></div>';

        $config['first_link'] = '&nbsp;';
        $config['prev_link'] = '&nbsp;';
        $config['next_link'] = '&nbsp;';
        $config['last_link'] = '&nbsp;';
        $CI->load->library('pagination');

        $CI->pagination->initialize($config);
        return $CI->pagination->create_links($page);
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

        // var_dump($endPage-$startPage+1< $links);

        if ($endPage - $startPage + 1 < $links)
            $endPage = $links + $startPage - 1;
        if ($endPage > $totalPage) {
            $startPage = $startPage + $totalPage - $endPage;
            $endPage = $totalPage;
            if ($startPage <= 1)
                $startPage = 1;
        };

        $html = '<div class="pagination">';
        $html .= '<div class="button2-right ' . ($page == 1 ? 'off' : '') . '">';

        if ($page == 1) {
            $html .= '<div class="prev"><span>&nbsp;</span></div>';
        } else {
            $html .= '<div class="start" title="First page"><a href="javascript:void(0);" onclick="getDataPage(1)" name="1">&nbsp;</a></div>';
            ;
            $html .= '<div class="prev" title="Previous page"><a href="javascript:void(0);" onclick="getDataPage(' . ($page - 1) . ')" name="' . ($page - 1) . '">&nbsp;</a></div>';
        }
        $html .= '</div>';
        for ($i = $startPage; $i <= $endPage; $i++) {
            $html .= '<div class="button2-left"><div class="page">';
            if ($i == $page) {
                $html .= '<span>' . ($i) . '</span>';
            } else {
                $html .= '<a href="javascript:void(0);" onclick="getDataPage(' . ($i) . ');" title="Page ' . ($i) . '" name="' . ($i) . '">' . ($i) . '</a>';
            }
            $html .= '</div></div>';
        }
        $html .= '<div class="button2-left ' . (($page == $totalPage || $totalPage == 0) ? 'off' : '') . '">';
        if ($page == $totalPage || $totalPage == 0) {
            $html .= '<div class="next"><span>&nbsp;</span></div>';
        } else {
            $html .= '<div class="next"  title="Next page"><a href="javascript:void(0);" onclick="getDataPage(' . ($page + 1) . ');" name="' . ($page + 1) . '">&nbsp;</a></div>';
            $html .= '<div class="end"  title="Last page"><a href="javascript:void(0);" onclick="getDataPage(' . $totalPage . ')" name="' . $totalPage . '">&nbsp;</a></div>';
        }
        $from = 0;
        $to = $page * $rows;
        if ($count > 0) {
            $from = (($page - 1) * $rows ) + 1;
        }
        if ($to > $count) {
            $to = $count;
        }
        $html .= '</div><span class="fright" style="margin-left:20px;">Show from ' . $from . ' to ' . $to . ' of all ' . $count . ' records</span>
                <div class="limit">Page ' . $page . ' / ' . $totalPage . '</div></div>';
        return $html;
    }

    function createCapcha($name, $width = 160, $height = 33, $characters = 3) {
        $font = BASEPATH . 'fonts/courbd.ttf';
        $possible = '23456789abcdefghjkmnopqrstvwxyz';
        $text = '';
        $i = 0;
        while ($i < $characters) {
            $text .= substr($possible, mt_rand(0, strlen($possible) - 1), 1);
            $i++;
        }
        $this->DeleteSession($name);
        $this->SetSession($name, md5($text));

        $im = imagecreatetruecolor($width, $height);
        $white = imagecolorallocate($im, 255, 255, 255);
        $grey = imagecolorallocate($im, 128, 128, 128);
        $black = imagecolorallocate($im, 0, 0, 0);
        imagefilledrectangle($im, 0, 0, 399, $height, $white);
        $noise_color = imagecolorallocate($im, 100, 120, 180);
        $noise_color3 = imagecolorallocate($im, 0, 120, 180);
        $noise_color2 = imagecolorallocate($im, 100, 120, 180);
        for ($i = 0; $i < ($width * $height) / 3; $i++) {

            imagefilledellipse($im, mt_rand(0, $width), mt_rand(0, $height), 1, 1, $noise_color);
        }

        /* generate random lines in background */
        for ($i = 0; $i < ($width * $height) / 150; $i++) {

            imageline($im, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), $noise_color2);
            imageline($im, mt_rand(0, $width), mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $height), $noise_color3);
        }

        $item_space = ($width - 3) / $characters;
        $max_font_size = 20;
        $min_font_size = 14;
        for ($i = 0; $i < $characters; $i++) {
            $x = ($i * $item_space) + 5;
            $font_size = rand(
                    $min_font_size, $max_font_size
            );
            $y = rand(($height / 2), $height - 3);
            imagettftext($im, $font_size, 0, $x, $y, $grey, $font, $text[$i]);
            imagettftext($im, $font_size, 0, $x - 1, $y - 1, $black, $font, $text[$i]);
        }
        header('Content-type: image/png');

        imagejpeg($im);
        imagedestroy($im);
    }

}

function create_id($string, $length = 5, $prefix = '') {
    $id = $prefix;
    if ($string == "") {
        for ($i = 0; $i < ($length - 1); $i++)
            $id.='0';
        $id.='1';
    } else {
        $temp = ((int) substr($string, (abs(strlen($string) - $length)), strlen($string)) + 1);
        $n = $length - strlen($temp);
        $str = '';
        for ($i = 0; $i < $n; $i++) {
            $str.='0';
        }
        $id.=$str . $temp;
    }
    return $id;
}

function admin_url() {
    $m = SELF;
    $m = explode('.', $m);
    $m = $m[0];
    $m = ($m == 'index') ? '' : $m . '.php' . '/';
    //$url = base_url().$m;
    return base_url() . $m;
}

function url_tmpl() {
    $Admin = new Admin();
    return base_url() . $Admin->path;
}
