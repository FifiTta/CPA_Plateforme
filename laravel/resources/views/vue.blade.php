<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Fiche de client</title>

  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="icon" type="image/png" href="{{URL::to('/images/icons/bank-logo.jpg')}}">

  <link rel="stylesheet" href="css/styleFormulaire.css">

</head>

<body>

  <!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Identification</li>
    <li>Informations</li>
    <li>Titulaire</li>
    <li>Conjoint</li>
    <li>Services Annexes</li>
    <li>Memo</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Identification</h2>
    <!--h3 class="fs-subtitle">This is step 1</h3-->

    <p> <label>Numéro:   <span class="text-danger"> * </span> </label>  
        <input type="text" id="fname" name="fname" placeholder="" onblur="validate(1)"/> </p>

    <p> <label>Agence:   <span class="text-danger"> * </span></label>  
          <select id="lname" name="agence" placeholder="" onblur="validate(2)">
            <option value="Agence1" selected="">Agence1 </option>
            <option value="Agence2" selected="selected">Agence2 </option>
            <option value="Agence3" selected="">Agence3</option>
          </select> </p>

    <p> <label>Nom: <span class="text-danger"> * </span> </label>     
          <input type="text" id="nom" name="nom" placeholder="" onblur="validate(3)"/> </p>

    <p> <label>Prénom: <span class="text-danger"> * </span> </label>   
          <input type="text" id="prenom" name="prenom" placeholder="" onblur="validate(4)"/> </p>


    </br> <h2 class="fs-title">Pièces d'identités</h2>

    <p> <label>Type: <span class="text-danger"> * </span></label>  
         <input type="text" id="type" name="type" placeholder="" onblur="validate(5)"/> </p>

    <p> <label>Numéro: <span class="text-danger"> * </span> </label>  
        <input type="text" id="ans" name="numero" placeholder="" onblur="validate(6)"/>
       <label>Validité: <span class="text-danger"> * </span> </label>     
            <input type="date" name="validite_one"/>  </p>
    
    <p> <label>Délivrée à: <span class="text-danger"> * </span> </label>     
          <input type="text" name="delivre_à"/>
        <label>Le: <span class="text-danger"> * </span> </label>    
           <input type="text" name="le_one"/> </p>

</br>

    <p> <label>Passeport  numéro: </label>  <input type="text"name="passeport_numero" />
        <label>Validité: </label>     <input type="date" name="validite_pss"/>  </p>
    <p> <label>Délivrée à: </label>     <input type="text" name="delivre_a"/>
        <label>Le: </label>     <input type="text" name="le_pss"/> </p>

</br>

        <p> <label>Identif. sociale: </label>  
         <input type="text" id="type" name="identif_sociale" placeholder="" /> </p>

    <p> <label>Ind: </label>  
        <input type="text" id="ans" name="ind" placeholder=""/></p>
     <p>  <label>No stat:</label>     
            <input type="text" name="no_stat"/>
        <label>No clt:</label>     
            <input type="text" name="no_clt"/>    </p>
    
    <p> <label>iden. Cent. Risq.:  </label>     
          <input type="text" name="ident_cent_risq"/>
        <label>Code Dec:</label>    
           <input type="text" name="code_dec"/> </p>

        
</br>
    <span class="next button">Suivant</span>

  </fieldset>


  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />

    <label>date: </label>    <input type="date" />   </p>
    <p> <label>Age: </label>     <select>  <option>Choose</option>  </select> </p>


    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>

</form>


<script src='/js/jquery.min.js'></script>
<script src='/js/jquery.easing.min.js'></script>

    <script src="/js/indexFormulaire.js"></script>

</body>
</html>
