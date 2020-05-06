<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.css">
   <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/d6a246da98.js"></script>
    <title>Page Enregistrement</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
            <div class="entete">
                  <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
                        <h1>Mon Logo</h1>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
                       <div class="menu">
                         <button class="btn btn-primary">MENU</button>
                       </div>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
                        <div class="rech">
                          <input type="text" class="recherche" name="recherche" value="" placeholder="Search">
                          <button class="btn btn-success">Valider</button>
                        </div>
                  </div>
            </div>
        </div>
        <div class="row">
              <div class="fond">
              <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3 hidden_xs hidden-sm">
              </div>
              <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                <h3> VOS INFORMATIONS SVP!!!</h3>
                 <div class="form">
                    <form class="" action="recup.php" method="post">
                       <input type="text" name="username" placeholder="Saisir votre Nom et Prenoms SVP!!!" value="" required>
                        <select class="compagnie" name="compagnie" placeholder="votre compagnie e transport">
                          <option value="0"> Quelle est votre compagnie ?</option>
                          <option value="UTB"> UTB</option>
                          <option value="CTE">CTE</option>
                          <option value="LE LABELLE">LE LABELLE</option>
                          <option value="MALEX">MALEX</option>
                          <option value="MT TRANSPORT">MT TRANSPORT</option>
                        </select>
                        <select class="villedep" name="villedep" placeholder="ville de depart">
                          <option value="0"> Quelle est votre ville de depart ?</option>
                          <option value="adjame ">adjame </option>
                          <option value="attecoube">attecoube</option>
                          <option value="cocody">cocody</option>
                          <option value="koumassi">koumassi</option>
                          <option value="5">marcory</option>
                          <option value="6">plateau</option>
                          <option value="7">portbouet</option>
                          <option value="8">treichville</option>
                          <option value="9">yopougon</option>
                          <option value="10">abengourou</option>
                          <option value="11">aboisso</option>
                          <option value="12">adzope</option>
                          <option value="13">agboville</option>
                          <option value="14">agnibilekrou</option>
                          <option value="15">anyama</option>
                          <option value="16">beoumi</option>
                          <option value="17">bingerville</option>
                          <option value="18">bocanda</option>
                          <option value="19">bondoukou</option>
                          <option value="20">bongouanou</option>
                          <option value="21">bonoua</option>
                          <option value="22">boundiali</option>
                          <option value="23">dabou</option>
                          <option value="24">daloa</option>
                          <option value="25">bouaflé</option>
                          <option value="26">danané</option>
                          <option value="27">daoukro</option>
                          <option value="28">dimbokro</option>
                          <option value="29">divo</option>
                          <option value="30">douekoue</option>
                          <option value="31">ferkessedougou</option>
                          <option value="32">gagnoa</option>
                          <option value="33">gohitafla</option>
                          <option value="34">grandlahou</option>
                          <option value="35">grandbassam</option>
                          <option value="36">Grand-Bereby</option>
                          <option value="37">guiglo</option>
                          <option value="38">issia</option>
                          <option value="39">jacqueville</option>
                          <option value="40">katiola</option>
                          <option value="41">korhogo</option>
                          <option value="42">mbahiakro</option>
                          <option value="43">mankono</option>
                          <option value="44">odienne</option>
                          <option value="45">oumé</option>
                          <option value="46">sassandra</option>
                          <option value="47">seguela</option>
                          <option value="48">sinfra</option>
                          <option value="49">soubré</option>
                          <option value="50">tengrela</option>
                          <option value="51">tiassale</option>
                          <option value="52">Toulepleu</option>
                          <option value="53">toumodi</option>
                          <option value="54">vavoua</option>
                          <option value="55">yamoussoukro</option>
                          <option value="56">zuenoula</option>
                          <option value="57">Bouna</option>
                          <option value="58">lakota</option>
                          <option value="59">kani</option>
                          <option value="60">man</option>
                          <option value="61">dabakala</option>
                          <option value="62">kong</option>
                          <option value="63">Touba</option>
                          <option value="64">bouake</option>
                        </select>
                        <select class="villed" name="villed" placeholder="ville de destination">
                          <option value="0"> Quelle est votre destination ?</option>
                          <option value="adjame">adjame </option>
                          <option value="attecoube">attecoube</option>
                          <option value="cocody">cocody</option>
                          <option value="koumassi">koumassi</option>
                          <option value="marcory">marcory</option>
                          <option value="plateau">plateau</option>
                          <option value="7">portbouet</option>
                          <option value="8">treichville</option>
                          <option value="9">yopougon</option>
                          <option value="10">abengourou</option>
                          <option value="11">aboisso</option>
                          <option value="12">adzope</option>
                          <option value="13">agboville</option>
                          <option value="14">agnibilekrou</option>
                          <option value="15">anyama</option>
                          <option value="16">beoumi</option>
                          <option value="17">bingerville</option>
                          <option value="18">bocanda</option>
                          <option value="19">bondoukou</option>
                          <option value="20">bongouanou</option>
                          <option value="21">bonoua</option>
                          <option value="22">boundiali</option>
                          <option value="23">dabou</option>
                          <option value="24">daloa</option>
                          <option value="25">bouaflé</option>
                          <option value="26">danané</option>
                          <option value="27">daoukro</option>
                          <option value="28">dimbokro</option>
                          <option value="29">divo</option>
                          <option value="30">douekoue</option>
                          <option value="31">ferkessedougou</option>
                          <option value="32">gagnoa</option>
                          <option value="33">gohitafla</option>
                          <option value="34">grandlahou</option>
                          <option value="35">grandbassam</option>
                          <option value="36">Grand-Bereby</option>
                          <option value="37">guiglo</option>
                          <option value="38">issia</option>
                          <option value="39">jacqueville</option>
                          <option value="40">katiola</option>
                          <option value="41">korhogo</option>
                          <option value="42">mbahiakro</option>
                          <option value="43">mankono</option>
                          <option value="44">odienne</option>
                          <option value="45">oumé</option>
                          <option value="46">sassandra</option>
                          <option value="47">seguela</option>
                          <option value="48">sinfra</option>
                          <option value="49">soubré</option>
                          <option value="50">tengrela</option>
                          <option value="51">tiassale</option>
                          <option value="52">Toulepleu</option>
                          <option value="53">toumodi</option>
                          <option value="54">vavoua</option>
                          <option value="55">yamoussoukro</option>
                          <option value="56">zuenoula</option>
                          <option value="57">Bouna</option>
                          <option value="58">lakota</option>
                          <option value="59">kani</option>
                          <option value="60">man</option>
                          <option value="61">dabakala</option>
                          <option value="62">kong</option>
                          <option value="63">Touba</option>
                          <option value="64">bouake</option>
                        </select>
                        <input type="date" class="dated" name="dated" value="Date du voyage!!!">
                        <input type="text" class="heuredep" placeholder="Entrez une heure au format 10h 30mn" name="heuredep">
                       <input type="submit" class="btn btn-primary" name="valider" value="VALIDER">
                    </form>
                 </div>
              </div>
              <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3 hidden_xs hidden-sm">
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="footer">
              <br><br>
              <p>
                copyright@_developer_from_IGS_2020
              </p>
            </div>
          </div>
        </div>
        <!-- <div class="row">

    <div class="col-md-10">

      <div class="wrapper" id="familydiv" style="display:none;">

        <?php
      include('connect.php');
          $sql1 = "SELECT * FROM informaticien ";
       $mifa = mysqli_query($conn,$sql1);
         ?>
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="1" width="100%">
          <center>Imformations de Voyages</center>

          <tr>


            <td> Nom et Prenoms</td>
            <td> la compagnie de transport </td>
            <td>  ville de Depart </td>
            <td>  ville de destination</td>
            <td>   date de depart</td>
            <td>  heure de depart</td>
          </tr>

          <?php

        /*  $nom= 'DAO';
          $prenom = 'Djack';
          $ville= 'Bingerville';
          $contact='47167654';*/
            if ($mifa) {
              // on va scanner tous les tuples un par un
            while ($data = mysqli_fetch_array($mifa)) {
              // on affiche les résultats

              echo "<tr>";
              echo "<td>".$data['username']."</td>";
              echo "<td>".$data['compagnie']."</td>";
              echo "<td>".$data['villedep']."</td>";
              echo "<td>".$data['villed']."</td>";
              echo "<td>".$data['dated']."</td>";
              echo "<td>".$data['heuredep']."</td>";
              echo "</tr>";
            }

            }

           ?>

        </table>

      </div>


    </div>


  </div> -->

    </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
  <script src="jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="JavaScript.js"></script>
 <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
