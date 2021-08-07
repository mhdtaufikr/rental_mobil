<style>
    h2{
        background-color:rgba(0, 0, 0, 0.4);
        
    }
    p{
        color: #FFD700;
        background-color:rgba(0, 0, 0, 0.4);
    }
</style>
  
  <!--== SlideshowBg Area Start ==-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <br><br><br>
                </div>
            </div>
        </div>
    <!--== SlideshowBg Area End ==-->

    <!--== Mobile App Area Start ==-->
    <br><br>
    <div></div>
    <section id="mobile-app-area">
    <style type="text/css">
		body
		{
			background-image:url('<?php echo base_url()?>assets/img/11.jpg');
            background-repeat:no-repeat;
            background-size:cover;
            
		}
	</style>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="mobile-app-content">
                                <?php if($this->session->userdata('nama')) { ?>
                                    <h2>SEWA MOBIL HARI INI!</h2>
                                    <p>PILIH MOBIL UNTUK DISEWA</p>
                                    <div class="app-btns">
                                        <a href="<?php echo base_url('Customer/Data_mobil')?>"><i class=""></i> MOBIL</a>
                                        
                                    </div>
                                <?php } else { ?>
                                    <h2>SEWA MOBIL HARI INI!</h2>
                                    <p>SILAHKAN LOGIN DAHULU UNTUK MENYEWA MOBIL KAMI</p>
                                    <div class="app-btns">
                                        <a href="<?php echo base_url('Auth/login')?>"><i class=""></i> MASUK</a>
                                        <a href="<?php echo base_url('Register')?>"><i class=""></i> DAFTAR</a>
                                    </div>
                                <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!--== Mobile App Area End ==-->
    