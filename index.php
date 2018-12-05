<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/r-2.2.2/datatables.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Banggood Import File Generator</title>
  </head>
  <body>
    
    <?php
      $csv = array_map('str_getcsv', file('bakeey m3.csv'));
      // $csv = array_map('trim', $csv[0]);
      array_walk($csv, function(&$a) use ($csv) {
        $a = array_combine( array_map('trim', $csv[0]), $a);
      });
      array_shift($csv); # remove column header
      // print_r ($csv);

      // $csv_data = array_map('str_getcsv', file('bakeey m3.csv'));// reads the csv file in php array
      // $csv_header = array_map('trim', $csv_data[0]); //creates a copy of csv header array $csv_data[0];
      // unset($csv_data[0]);//removes the header from $csv_data since no longer needed
      // foreach($csv_data as $row){
      //     $row = array_combine($csv_header, $row);// adds header to each row as key
      //     var_dump($row);//do something here with each row
      // }
    ?>
    <div class="Container">
      <div class="row">
        <div class="col-md-12 mx-auto">
          <h3 class="text-center">Import File Generator for Banggood</h3>
        </div>
      </div>
      <div class="row bg-light p-4">
        <div class="col-md-4 mx-auto">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
          <button type="button" class="btn btn-primary">Generate</button>
        </div>
        <div class="col-md-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Published</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck2">
            <label class="custom-control-label" for="customCheck2">Is featured?</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck3">
            <label class="custom-control-label" for="customCheck3">Visibility in Catalog</label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck4">
            <label class="custom-control-label" for="customCheck4">Attribute 1 visible</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck5">
            <label class="custom-control-label" for="customCheck5">Attribute 1 global</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck6">
            <label class="custom-control-label" for="customCheck6">Published</label>
          </div>
          
        </div>
      </div>
    

      <div class="row">
        <div class="col-md-12 p-5">
          <table class="table table-bordered table-hover table-responsive" id="finaldata">
            <thead class="thead-light">
              <tr>
                <th>ID</th>
                <th>Type</th>
                <th>SKU</th>
                <th>Name</th>
                <th>Published</th>
                <th>Is featured?</th>
                <th>Visibility in catalog</th>
                <th>Short description</th>
                <th>Description</th>
                <th>Date sale price starts</th>
                <th>Date sale price ends</th>
                <th>Tax status</th>
                <th>Tax class</th>
                <th>In stock?</th>
                <th>Stock</th>
                <th>Backorders allowed?</th>
                <th>Sold individually?</th>
                <th>Weight (kg)</th>
                <th>Length (in)</th>
                <th>Width (in)</th>
                <th>Height (in)</th>
                <th>Allow customer reviews?</th>
                <th>Purchase note</th>
                <th>Sale price</th>
                <th>Regular price</th>
                <th>Categories</th>
                <th>Tags</th>
                <th>Images</th>
                <th>Download limit</th>
                <th>Download expiry days</th>
                <th>Parent</th>
                <th>Grouped products</th>
                <th>Upsells</th>
                <th>Cross-sells</th>
                <th>External URL</th>
                <th>Button text</th>
                <th>Position</th>
                <th>Attribute 1 name</th>
                <th>Attribute 1 value(s)</th>
                <th>Attribute 1 visible</th>
                <th>Attribute 1 global</th>
                <th>Meta: _wpcom_is_markdown</th>
                <th>Download 1 name</th>
                <th>Download 1 URL</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $variationCount = 0;
              for ($rowno = 0; $rowno < count($csv); $rowno++) {
                echo '<tr style="height:50%;">';
                  echo ('<td>'.$id=($rowno+1).'</td>');
                  echo ('<td>variable</td>');
                  echo '<td>'. $csv[$rowno]['Product_ID'] .'</td>'; 
                  echo '<td class="namecls">'. $csv[$rowno]['Product_Name'] .'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td class="description"><xmp>'. $csv[$rowno]['Product_Description_1'] . '</xmp></td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>1</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'. $csv[$rowno]['Weight(kg)'] .'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>1</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'. $csv[$rowno]['Product_Price'] .'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'. $csv[$rowno]['Category_name'] . ' > ' . $csv[$rowno]['Sub_Category_name'] .'</td>';
                  echo '<td>'.'</td>';
                  
                  echo '<td>';
                  for ($i = 1; $i <= 10; $i++) {
                    if ($csv[$rowno]['product_image_'.$i] == null){
                      continue;
                    }
                    echo $csv[$rowno]['product_image_'.$i] . ',';
                  }
                  echo '</td>';

                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';

                  echo '<td>';
                    $var = preg_split("#/#", $csv[$rowno]['Options']);
                    // print_r($var);
                    $filter = array('Color', 'Size');
                    if (stripos(json_encode($var),'Color') !== false) {
                      echo "Color";
                      $isvariation = true;
                      $type = "Color";
                    }
                    
                  echo '</td>';

                  echo '<td>';
                    foreach($var as &$element) {
                      $element = str_replace($filter, "", $element);
                    }

                    for($i=0; $i<count($var); $i++){
                      if($var[$i] == null){
                        continue;
                      }
                      else{
                        $variationCount++;
                        echo $var[$i];
                        if($i+2 == count($var)){
                          continue;
                        }
                        else{
                          echo ", ";
                        }
                      }  
                    }
                    
                  echo '</td>';

                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                  echo '<td>'.'</td>';
                echo '</tr>';

                if($isvariation == true){
                  variationRow($rowno, $type, $variationCount);
                }
              }
              
              function variationRow(){
                echo "966237989";
              }

              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/af-2.3.2/b-1.5.4/b-html5-1.5.4/b-print-1.5.4/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/r-2.2.2/datatables.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>