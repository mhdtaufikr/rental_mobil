<?php 

    class laporan extends CI_Controller{
        public function index(){

            $dari   = $this->input->post('dari');
            $sampai   = $this->input->post('sampai');
            $this->_rules();
            if($this->form_validation->run() == FALSE){
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('Admin/filter_laporan');
                $this->load->view('templates_admin/footer');
            
            }else{
                $data['laporan'] = $this->db->query("SELECT * from transaksi tr, mobil mb, customer cs where tr.id_mobil=mb.id_mobil and tr.id_customer = cs.id_customer and date(tgl_rental) >= '$dari' and date(tgl_rental) <= '$sampai' ")->result();
                
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('Admin/tampilkan_laporan',$data);
                $this->load->view('templates_admin/footer');
                
            }
        }
        public function print_laporan(){
            $dari   = $this->input->get('dari');
            $sampai   = $this->input->get('sampai');
            $data['title']  = "Print Laporan Transaksi";
            $data['laporan'] = $this->db->query("SELECT * from transaksi tr, mobil mb, customer cs where tr.id_mobil=mb.id_mobil and tr.id_customer = cs.id_customer and date(tgl_rental) >= '$dari' and date(tgl_rental) <= '$sampai' ")->result();
            $this->load->view('templates_admin/header',$data);
            $this->load->view('Admin/print_laporan',$data);
            
        }
        public function _rules(){
            $this->form_validation->set_rules('dari','Dari Tanggal','required');
            $this->form_validation->set_rules('sampai','Sampai Tanggal','required');
        }
    }

?>