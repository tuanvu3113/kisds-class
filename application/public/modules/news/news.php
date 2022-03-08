<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class news extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model(array('model','base_model'));
        $this->site->setTemplate('home');
        $this->route = $this->router->class;
    }
    function  _remap($method, $params = array()){
        if(method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }
    function _view(){
        $data = new stdClass();
        $url_current = $_SERVER['REQUEST_URI'];
        $data->controller = site_url().$this->route;
        $arr_url = explode("/", $url_current);
        $id = "";
        if (isset($arr_url[2])) {
            $id = str_replace(".html", "", $arr_url[2]);
        }
        $content = "";
        if ($id) {
            $news = $this->model->getNewsContent($id);
            $tag = isset($news[0]->tag) ? $news[0]->tag : '';
            $news_title = isset($news[0]->news_title) ? $news[0]->news_title : 'News';
            $data->content = $news;
            $_SESSION["title_SEO"]= $news_title;
            $_SESSION["keywords_SEO"]= '';
            $content = $this->load->view('detail', $data, true);
        }
        else {
            $content = $this->load->view('view', $data, true);
            $_SESSION["title_SEO"]= 'News';
            $_SESSION["keywords_SEO"]= '';
        }
        $this->site->write('content', $content, true);
        $this->site->render();
    }

    function getList() {
        if (!$this->input->post('csrf_stock_name')) {
            // show_404();
        }
        $numrows = 10;
        $data = new stdClass();
        $page = $this->input->post('page');
        $newsList = $this->model->getNews($page, $numrows);
        $count = $this->model->getTotal();
        $data->datas = $newsList;
        $data->start = empty($page) ? 1 : (($page - 1) * $numrows + 1);
        $page_view = $this->base_model->paging($count, $numrows, NULL, $page);
        $result = new stdClass();
        $result->count = $count;
        $result->paging = $page_view;
        $result->cPage = $page;
        $result->content = $this->load->view('list', $data, true);
        echo json_encode($result);
    }
}