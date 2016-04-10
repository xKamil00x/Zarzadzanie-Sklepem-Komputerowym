<?php
require("./header.php");
require("./include/zapytania-home.php");
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Komputerex
            <small>Sprzęt marzeń</small>
          </h1>
          <ol class="breadcrumb">
            <li><a><i class="fa fa-dashboard"></i> Komputerex</a></li>
            <li class="active">Spis produktów</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><? echo $ilosc_zamowien; ?></h3>
                  <p>Zamówień</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                 <a href="#" class="small-box-footer">
                  Stwórz nowe zamówienie <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><? echo $ilosc_aktualna;?>/<? echo $ilosc_calkowita;?></h3>
                  <p>Artykułów</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a class="small-box-footer">
                  Zobacz listę produktów <i class="fa fa-arrow-circle-down"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><? echo $ilosc_kategorie; ?></h3>
                  <p>Kategorii</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                
                <? if(useraccess($_SESSION['username'])=='1' OR (useraccess($_SESSION['username'])=='2'))
                {?> <a href="#" class="small-box-footer">
                  Dodaj nową kategorię <i class="fa fa-arrow-circle-right"></i>
                </a> <?}
                else {?> <a class="small-box-footer">
                  Brak uprawnień <i class="fa fa-ban"></i>
                </a> <?} ?>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><? echo $ilosc_klient;?></h3>
                  <p>Klientów</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Zobacz listę klientów <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            
          </div><!-- /.row -->
         



<?
require('./include/spis-produktow.php');
?>






        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->




<?


require("./footer.php");
?>
