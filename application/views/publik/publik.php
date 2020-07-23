<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Halaman Publik My Resume V2">
    <meta name="keywords" content="myresume, myresumev2, my resume, resume, versi 2, v2, febi, aris, rinaldi, febi aris rinaldi, website, situs, site, ciletuh geopark, ciwaru, tamanjaya, surade, jampang, orang jampang, kecamatan ciemas, kecamatan surade, gunung sunging">
    <meta name="author" content="Febi Aris Rinaldi">
    <!-- <link rel="icon" href="favicon.ico" type="image/ico"> -->
    <title>My Resume V2</title>
    <meta name="description" content="This is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>styles_publik/css/aos.css" rel="stylesheet">
    <link href="<?=base_url()?>styles_publik/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>styles_publik/styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <!-- <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Creative CV</a> -->
            <div class="navbar-translate"><a class="navbar-brand" href="<?=base_url()?>" rel="tooltip" title="This is my name"><img src="<?=base_url()?>penyimpanan_file/images/<?=$content['logo']?>" alt=""></a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('<?=base_url()?>penyimpanan_file/images/<?=$content['img_bg_paralax']?>');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="<?=base_url()?>"><img src="<?=base_url()?>penyimpanan_file/images/<?=$content['foto_profil']?>" alt="Image"/></a></div>
          <div class="h2 title"><?=$content['nama']?></div>
          <p class="category text-white"><?=$content['profesi']?></p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="javascript:void(0)" onclick="location.href='<?=base_url()?>penyimpanan_file/documents/<?=$content['file_cv']?>'" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container">
            <?php if (empty($allFollowMe)) {echo null;}else{ foreach ($allFollowMe as $sosmed) {?>
            <a class="btn btn-default btn-round btn-lg btn-icon" href="<?=$sosmed['url_sosmed']?>" target="_blank" rel="tooltip" title="Follow me on <?=$sosmed['nama_sosmed']?>"><i class="<?=$sosmed['icon_sosmed']?>"></i></a>
          <?php }}?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <p><?=$content['about']?></p>
            <!-- <p>Hello! I am Anthony Barnett. Web Developer, Graphic Designer and Photographer.</p>
            <p>Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skills and experience. <a href="https://templateflip.com/templates/creative-cv/" target="_blank">Learn More</a></p> -->
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <?php
              // tanggal lahir
              $tanggal = new DateTime($content['bi_tgl_lahir']);

              // tanggal hari ini
              $today = new DateTime('today');

              //fungsi diff adalah untuk menghitung selisih disini fungsi diff digunakan untuk menghitung selisih tahun dari tahun kelahiran sampai tahun sekarang berapakah selisih tahunnya dan hasil nya disimpan di dalam varibel y
              // tahun
              $y = $today->diff($tanggal)->y;

              // bulan
              // $m = $today->diff($tanggal)->m;

              // hari
              // $d = $today->diff($tanggal)->d;
              // echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";
              ?>
              <div class="col-sm-8"><?=$y?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><a href="javascript:void(0)" onclick="location.href='mailto:<?=$content['bi_email']?>'" rel="tooltip" title="Click to send me an email"><?=$content['bi_email']?></a></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div  class="col-sm-8"><a href="javascript:void(0)" onclick="location.href='tel:+<?=$content['bi_phone']?>'" rel="tooltip" title="Click to call me, text me or WhatsApp me using your smartphone cause this number also my WhatsApp number">+<?=$content['bi_phone']?></a></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8"><a href="javascript:void(0)" onclick="window.open('<?=$content['bi_address_map']?>');" rel="tooltip" title="Click to find me on google maps"><?=$content['bi_address']?></a></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
              <div class="col-sm-8"><?=$content['bi_language']?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if (empty($allSkill)) {echo null;}else{?>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Professional Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          <?php foreach($allSkill as $skill) {?>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><?=$skill['nama_skill']?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=$skill['persen_skill']?>%;"></div><span class="progress-value"><?=$skill['persen_skill']?>%</span>
              </div>
            </div>
          </div>
        <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php if (empty($allPortfolio)): echo null; else: ?>
<div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Portfolio</div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" role="tablist">
                <i class="fa fa-laptop" aria-hidden="true"></i>
              </a>
            </li>
            <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photography" role="tablist"><i class="fa fa-camera" aria-hidden="true"></i></a></li> -->
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content gallery mt-5">
      <div class="tab-pane active">
        <div class="ml-auto mr-auto">
          <div class="row">
            <?php foreach($allPortfolio as $portfolio): ?>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <?php if($portfolio['url_portfolio'] == ""):?>
              <a onclick="pemberitahuan()" rel="tooltip"><?php else:?>
                <a onclick="window.open('<?=$portfolio['url_portfolio']?>');" rel="tooltip" title="Click to see"><?php endif;?>
                  <figure class="cc-effect"><img src="<?=base_url()?>penyimpanan_file/images/<?=$portfolio['capture']?>" alt="Image"/>
                    <figcaption>
                      <div class="h4"><?=$portfolio['nama_portfolio']?></div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a>
                </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
<!--       <div class="tab-pane" id="graphic-design" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Triangle Pattern</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Abstract Umbrella</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Cube Surface Texture</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Abstract Line</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="Photography" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Wedding Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Beach Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Nature Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
<?php endif; ?>
<?php if (empty($allWorkExperience)): echo null; else: ?>
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Work Experience</div>
    <?php foreach($allWorkExperience as $workExperience): ?>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p><?=date('F Y', strtotime($workExperience['tgl_awal_kerja']))?> - <?=date('F Y', strtotime($workExperience['tgl_akhir_kerja']))?></p>
            <div class="h5"><?=$workExperience['nama_perusahaan']?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?=$workExperience['jabatan']?></div>
            <p><?=$workExperience['informasi_pekerjaan']?></p>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <!-- <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p>April 2014 - March 2016</p>
            <div class="h5">WebNote</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Web Developer</div>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p>April 2013 - February 2014</p>
            <div class="h5">WEBM</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Intern</div>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>
<?php endif; ?>
<?php if (empty($allEducation)): echo null; else: ?>
<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Education</div>
    <?php foreach($allEducation as $education): ?>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p><?=$education['tahun_masuk']?> - <?=$education['tahun_lulus']?></p>
            <div class="h5"><?=$education['tingkat_education']?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body"><?php if (empty($education['degree'])): echo null; else: ?>
            <div class="h5"><?=$education['degree']?></div><?php endif;?>
            <?php if (empty($education['degree'])):?>
            <div class="h5"><?=$education['jurusan']?></div><?php else:?>
            <div class="h6"><?=$education['jurusan']?></div><?php endif;?>
            <p class="category"><?=$education['nama_instansi']?></p>
            <p><?=$education['informasi_education']?></p>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;?>
    <!-- <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p>2009 - 2013</p>
            <div class="h5">Bachelor's Degree</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Bachelor of Computer Science</div>
            <div class="h5">Informatic Engineering</div>
            <p class="category">University of Computer Science</p>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p>2007 - 2009</p>
            <div class="h5">High School</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Science and Mathematics</div>
            <p class="category">School of Secondary board</p>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>
<?php endif;?>
<div class="section" id="reference" style="background-color: green;">

<!-- hapus div ini jika punya reference dan aktifkan div section reference yang di bawah -->
<div><font color="green">h</font></div> <div><font color="green">j</font></div> 
</div>
<!-- end of hapus div ini jika punya reference dan aktifkan div section reference yang di bawah -->

<!-- <div class="section" id="reference">
  <div class="container cc-reference">
    <div class="h4 mb-4 text-center title">References</div>
    <div class="card" data-aos="zoom-in">
      <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-target="#cc-Indicators" data-slide-to="0"></li>
          <li data-target="#cc-Indicators" data-slide-to="1"></li>
          <li data-target="#cc-Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-1.jpg" alt="Image"/>
                <div class="h5 pt-2">Aiyana</div>
                <p class="category">CEO / WEBM</p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-2.jpg" alt="Image"/>
                <div class="h5 pt-2">Braiden</div>
                <p class="category">CEO / Creativem</p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-3.jpg" alt="Image"/>
                <div class="h5 pt-2">Alexander</div>
                <p class="category">CEO / Webnote</p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('<?=base_url()?>penyimpanan_file/images/<?=$content['img_bg_contact']?>');">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contact Me</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="https://formspree.io/febyaris68@rocketmail.com" method="POST">
                      <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Name" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="Subject" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Address </strong></p>
                    <p class="pb-2"><a href="javascript:void(0)" onclick="window.open('<?=$content['bi_address_map']?>');" rel="tooltip" title="Click to find me on google maps"><?=$content['bi_address']?></a></p>
                    <p class="mb-0"><strong>WhatsApp</strong></p>
                    <p class="pb-2"><a href="javascript:void(0)" onclick="window.open('https://api.whatsapp.com/send?phone=+<?=$content['bi_phone']?>&text=HiMyRes');" rel="tooltip" title="Click to WhatsApp me using your smartphone">+<?=$content['bi_phone']?></a></p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p><a href="javascript:void(0)" onclick="location.href='mailto:<?=$content['bi_email']?>'" rel="tooltip" title="Click to send me an email"><?=$content['bi_email']?></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="footer">
      <div class="container text-center">
        <?php if (empty($allFollowMe)) {echo null;}else{ foreach ($allFollowMe as $sosmed) {?>
        <a onclick="window.open('<?=$sosmed['url_sosmed']?>');" class="cc-<?=$sosmed['nama_sosmed']?> btn btn-link" href="javascript:void(0)" rel="tooltip" title="click to see"><i class="<?=$sosmed['icon_sosmed']?> fa-2x " aria-hidden="true"></i></a>
      <?php }}?>
      </div>
      <div class="h4 title text-center">Febi Aris Rinaldi</div>
      <div class="text-center text-muted">
        <p>&copy; 2020 My Resume v2.0.0 by Febi Aris Rinaldi.<br>
        All rights reserved.</p>
      </div>
    </footer>
    <script>
    function pemberitahuan() {
        Swal.fire({
                  icon: "error",
                  title: "Whoops! I apologize<br>the URL does not exist",
                  width: 500,
                  showConfirmButton: false,
                  timer: 1500
                });
    }
    </script>
    <script src="<?=base_url()?>styles_publik/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?=base_url()?>styles_publik/js/core/popper.min.js"></script>
    <script src="<?=base_url()?>styles_publik/js/core/bootstrap.min.js"></script>
    <script src="<?=base_url()?>styles_publik/js/now-ui-kit.js?v=1.1.0"></script>
    <script src="<?=base_url()?>styles_publik/js/aos.js"></script>
    <script src="<?=base_url()?>styles_publik/scripts/main.js"></script>
    <script src="<?=base_url()?>styles_publik/js/swal.js"></script>
  </body>
</html>