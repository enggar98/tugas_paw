<?php
    mysql_connect("localhost","root","","") or die (mysql_error());
    mysql_select_db("tugas_paw") or die (mysql_error());
	require_once "PHPUnit/Framework/TestCase.php";
	class TestClass extends PHPUnit_Framework_TestCase
	{
		
		public function testInsert(){

			if(!empty($_FILES['proposal']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['proposal']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->uploaid->do_upload('proposal')){
                    $uploadData = $this->upload->data();
                    $proposal = $uploadData['file_name'];
                }else{
                    $proposal = '';
                }
            }else{
                $proposal = '';
            }
            
		}

        public function testid(){

            $query = mysql_query("SELECT * FROM tb_dosen where id_user='85'");
            $data = mysql_fetch_array($query);
            $test_id = $data['id_dosen'];
            $content = $test_id;
            $this->assertEquals('41',$content);

        }

	       
	}
?>