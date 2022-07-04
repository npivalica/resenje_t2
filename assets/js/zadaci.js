$(document).ready(function(){
  let zadaci = [
      "Kreirati konekciju sa bazom. Od sada cemo smestati u folder <b>config</b>.",
      "Otvoriti fajl <b>resenje.php</b>, u okviru koga se nalazi pocetak zadatka.",
      "<b style='color:red;'>Voditi računa o statusnim kodovima prilikom vraćanja rezultata.</b>",
      "<b>PRIKAZ</b>: Prikazati proizvode iz baze u skladu sa template-om.",
      "<b>INSERT</b>: Napraviti logiku za unos proizvoda.",
      "Istovremeno uneti sve zapise. <b>U PhpMydmin rucno dodati i pogledati kako izgleda upit.</b>",
      "Osvežiti prikaz novim podacima.",
      "<b>FILTRIRANJE</b>: Pretražiti proizvode po: nazivu i opisu.",
  ];

  let ispis = "";
  for(let zadatak of zadaci){
      ispis += `<tr>
      <td>
        <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          <span class="form-check-sign">
          <span class="check"></span>
          </span>
        </label>
        </div>
      </td>
      <td>${ zadatak }</td>
    </tr>`;
  }

  $("#zadaci_tabela").html(ispis);
})