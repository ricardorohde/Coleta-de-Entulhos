<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coleta de  Entulhos - ADM</title>
    <link href="/../res/admin/img/icon.png" rel="icon">
    <link rel="stylesheet" href="/../res/admin//css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >

  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i style="margin-top: -5px;" class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3 style="font-size: 18px;">Coleta de Entulhos - ADM</h3>
      </div>
      <div class="right_area">
        <a href="/admin/logout" class="logout_btn">Sair</a>
      </div>
    </header>
    <!--header area end-->

    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
         <?php if( $user["picture"] == 0 ){ ?>

        <img src="/../res/admin/ft_perfil/no_photo.png" class="mobile_profile_image" alt="">
        <?php }else{ ?>

        <img src="/../res/admin/ft_perfil/<?php echo $user["picture"]; ?>" class="mobile_profile_image" alt="">
        <?php } ?>

         <b style="font-size: 17px;color: white;"><?php echo getUserName(); ?></b>
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
      <a href="/admin"><i class="fas fa-desktop"></i><span>Painel de Controle</span></a>
      <a href="#"><i class="fas fa-users"></i><span>Usuários</span></a>
       <a href="#"><i class="fas fa-address-card"></i><span>Abertura de Chamado</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Andamento do Chamado</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Relatórios</span></a>
      <a href="/admin/profile"><i class="fas fa-info-circle"></i><span>Meu Perfil</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->

    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <?php if( $user["picture"] == 0 ){ ?>

        <img src="/../res/admin/ft_perfil/no_photo.png" class="profile_image" alt="">
        <?php }else{ ?>

        <img src="/../res/admin/ft_perfil/<?php echo $user["picture"]; ?>" class="profile_image" alt="">
        <?php } ?>

        <h5 style="font-size: 18px;color: white;" ><?php echo getUserName(); ?></h5>
      </div>
      <a href="/admin"><i class="fas fa-desktop"></i><span>Painel de Controle</span></a>
      <a href="#"><i class="fas fa-users"></i><span>Usuários</span></a>
     <a href="#"><i class="fas fa-address-card"></i><span>Abertura de Chamado</span></a>
      <a href="#"><i class="fas fa-eye"></i><span>Ver Chamados</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Relatórios</span></a>
      <a href="/admin/profile"><i class="fas fa-info-circle"></i><span>Meu Perfil</span></a>
    </div>
    <!--sidebar end-->