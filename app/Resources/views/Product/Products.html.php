<?php
echo $this->ta;
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Kajal Khanna">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bootstrap Datatable </title>
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<style>
*, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
 
  background-size: cover;
  background-position: center;
  font-size: 12px;
  font-family: "Sofia";
  color: black;
 
}



.background {
  display: flex;
  min-height: 100vh;
}

.container {
  flex: 0 1 1500px;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #eae6e2;
  border-radius: 15px;
}

.screen:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  bottom: 0;
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
  z-index: -1;
}

.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: #56301d ;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.screen-header-left {
  margin-right: auto;
}

.screen-header-button {
  display: inline-block;
  width: 8px;
  height: 8px;
  margin-right: 3px;
  border-radius: 8px;
  background: white;
}

.screen-header-button.close {
  background: #ed1c6f;
}

.screen-header-button.maximize {
  background: #e8e925;
}

.screen-header-button.minimize {
  background: #74c54f;
}

.screen-header-right {
  display: flex;
}

.screen-header-ellipsis {
  width: 3px;
  height: 3px;
  margin-left: 2px;
  border-radius: 8px;
  background: #999;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}

.screen-body-item.left {
  display: flex;
  flex-direction: column;
}

.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: white;
  font-size: 26px;
}

.app-title:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: white;
}

.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #888;
}

.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.message {
  margin-top: 40px;
}

.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}

.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  text-transform: uppercase;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: #666;
}

.app-form-control:focus {
  border-bottom-color: #ddd;
}

.app-form-button {
  background: none;
  border: none;
  color: white;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.app-form-button:hover {
  color: #b9134f;
}

.credits {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  color: #ffa4bd;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  font-weight: normal;
}

.credits-link {
  display: flex;
  align-items: center;
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}

.dribbble {
  width: 20px;
  height: 20px;
  margin: 0 5px;
}

@media screen and (max-width: 520px) {
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 30px;
  }

  .app-title {
    flex-direction: row;
  }

  .app-title span {
    margin-right: 12px;
  }

  .app-title:after {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}
* {
  box-sizing: border-box;
 
     background-repeat: no-repeat;
   background-attachment: fixed;
  background-size: 100% 100%;
}
table {
  border-collapse: collapse;
  width: 100%;
}



table.d {
  table-layout: fixed;
  width: 100%;  
}

th,td {
  border: 1px solid white;
  text-align: left;
  padding: 8px;
}

th {
  background-color: #56301d;
  color: white;
  cursor: pointer;
}


p {
  font-family: "Sofia", sans-serif;
  font-size: 30px;
  text-shadow: 3px 3px 3px #ababab;
}
   
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: #1D243A;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

</style>
</head>
<body class="bg-info">
<?= $this->wysiwyg("specialContent"); ?>
     
<div class="background">
  <div class="container"><div class="screen">
     <div class="screen-header">
               <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
 
    <div class="screen">
   
<div class="product-info">
    <?php
    if($this->editmode):
       
    else: ?>

   <div class="container">
  <div class="row  justify-content-center">
  <div class="col-lg-10 bg-light rounded my-2 py-2">
  <h4 class="text-center text-dark pt-2">Product Listing</h4><hr>
   <table class="table table-bordered table-striped table-hover">
     
           <thead>   <tr>
           
            <th>SKU</th>
                <th>Name</th>
                <th  >Brand</th>
                <th  >Price</th>
                <th  >Quantity</th>
                <th  >Texture</th>
                <th  >For</th>
                <th  >Rating</th>
                <th  >Expiry Date</th>
                <th  >Made In</th>
                
               
                <th  >Image</th>
               
            </tr>    </thead>          
   
       
 <div class="screen-body">
   
      <tbody>
  <?php $prod = new \Pimcore\Model\DataObject\Product\Listing(); ?>
       <?php
        foreach($prod as $product)
        {
            ?>
           
            <tr >
            <td ><?=$product->getSku(); ?></td>
            <td ><?=$product->getName(); ?></td>
             <td ><?=$product->getBrand(); ?></td>
             <td ><?=$product->getPrice(); ?></td>
             <td ><?=$product->getQuantity(); ?></td>
             <td ><?=$product->getTexture(); ?></td>
              <td><?=$product->getGender(); ?></td>
              <td><?=$product->getRating(); ?></td>
              <td><?=$product->getExpiry(); ?></td>
              <td><?=$product->getCountry(); ?></td>
           
           
            <?php


            $picture = $product->getImage();
              if($picture instanceof \Pimcore\Model\Asset\Image):

            /** @var \Pimcore\Model\Asset\Image $Image */
            ?>

         <td><?= $picture->getThumbnail()->getHtml(["width" => 100,"height" => 100])?> </td>
           
           
            <?php endif;
           
            ?>
           
            </tr>
        <?php
     }
     ?>  
       </tbody>          
        </table></div></div>
    </div> </div>  </div>
    </div>
    </div>
   <!-- <?php endif; ?> -->
 
</div>
</div>
<script type="text/javascript">


$(document).ready(function(){
$('table').DataTable();


} );

</script>
  </body>
 
  </html>
