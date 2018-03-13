<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Capsule\Manager as DB;

class C_instruktur extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Course');
        $this->load->model('M_Course_Assesment');
        $this->load->model('M_Course_Assesment_Question');
        $this->load->model('M_Course_Assesment_Question_Answer');
        
    }
    
    public function index()
    {

    }

    public function dashboard()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/dashboard_instruktur';
        $data['course'] = DB::table("course")
            ->leftJoin("users","users.usr_id","=","course.usr_id")
            ->where("course.usr_id","=",$this->session->userdata['id'])->get();
        $i = 0;
        $jum = array();
        foreach ($data['course'] as $c){
            $krus = $this->M_Course->select($c->usr_id);
//            dd($krus);
            $jum[$i] = $krus->count();
            $i++;
        }
        $data['jum'] = $jum;

//        dd($data['jum']);
        $this->load->view('layout/master', $data);
        
    }
    public function result_instruktur()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/result_instruktur';
        $this->load->view('layout/master', $data);
    }

//    public function add_course()
//    {
//        $data['sidebar'] = 'layout/sidebar_instruktur';
//        $data['content'] = 'instruktur/add_course';
//        $this->load->view('layout/master', $data);
//
//    }
//
//    public function lesson()
//    {
//        $data['sidebar'] = 'layout/sidebar_instruktur';
//        $data['content'] = 'instruktur/lesson';
//        $this->load->view('layout/master', $data);
//
//    }
//
//    public function add_lesson()
//    {
//        $data['sidebar'] = 'layout/sidebar_instruktur';
//        $data['content'] = 'instruktur/add_lesson';
//        $this->load->view('layout/master', $data);
//
//    }


//    public function learning_outcome()
//    {
//        $data['sidebar'] = 'layout/sidebar_instruktur';
//        $data['content'] = 'instruktur/learning_outcome';
//        $this->load->view('layout/master',$data);
//    }

//    public function add_lo()
//    {
//        $data['sidebar'] = 'layout/sidebar_instruktur';
//        $data['content'] = 'instruktur/add_LO';
//        $this->load->view('layout/master', $data);
//
//    }

   
//    public function add_assessment()
//    {
//        $data['sidebar'] = 'layout/sidebar_instruktur';
//        $data['content'] = 'instruktur/tambah_assessment';
//        $this->load->view('layout/master', $data);
//
//    }
//
//    public function add_assessment2()
//    {
//        $this->model->load('M_Course_Assessment');
//        $this->M_Course_Assessment->insert();
//
//        $jumSoal =$this->input->post('currNum');
//        $i = 1;
//        while($i <= $jumSoal){
//            $text = $this->input->post('soal'+$i);
//            $jwbBenar = $this->input->post('opt'+$i);
//            $A = $this->input->post('A'+$i);
//            $B = $this->input->post('B'+$i);
//            $C = $this->input->post('C'+$i);
//            $D = $this->input->post('D'+$i);
//            $E = $this->input->post('E'+$i);
//            //DB insert()
//            $i++;
//        }
//    }

    public function add_pretest()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/tambah_pretest';
        $this->load->view('layout/master', $data);
        
    } 

    public function add_remedial()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/tambah_remedial';
        $this->load->view('layout/master', $data);
        
    }  

    public function add_exercise()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/tambah_latihan';
        $this->load->view('layout/master', $data);
        
    }

    //public function add_assignment()
    //{
      //  $data['sidebar'] = 'layout/sidebar_instruktur';
        //$data['content'] = 'instruktur/add_assignment';
        //$this->load->view('layout/master', $data);
    //}


    public function result_siswa()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/result_instruktur';
        $this->load->view('layout/master',$data);
    }
}
