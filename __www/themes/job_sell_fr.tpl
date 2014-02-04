<page>
	<table style="width:{mWidth}mm" >
    <tr>
      <td style="width:90mm;vertical-align:top"><img src="images/logo.png"></td>
      <td style="width:90mm;vertical-align:bottom;text-align:right">Job {jobRef}</td>
    </tr>
  </table>
  <br/><br/>
   <table style="width:{mWidth}mm" >
    <tr>
      <td style='width:90mm'></td>
      <td style='width:90mm;'>{user}</td>
    </tr>
  </table>
   <br/><br/>
  <table style="width:{mWidth}mm" >
    <tr>
      <td style='width:{mWidth}mm;background-color:#ededed;text-align:center'><b>LIEU ET DATES</b></td>
    </tr>
  </table>
  <b><u>Client :</u></b>
 <p>{client}</p>
  <b><u>Lieu :</u></b>
  <p> {deliveryAddress} </p>
  <br/>
  <b><u>Timing :</u></b>
  <ul>
    <li>Montage : {timingBuild}</li>
    <li>Jour(s) en place : {timingInPlace}</li>
    <li>Démontage : {timingUnbuild}</li>
  </ul>
  {buildComments}
  <table style="width:{mWidth}mm" >
    <tr>
      <td style='width:{mWidth}mm;background-color:#ededed;text-align:center'><b>MATERIEL</b></td>
    </tr>
  </table>
  <b><u>Tente(s) :</u></b> {tents} <br/>
  <b><u>Matériel :</u></b> {matos} <br/>
  <b><u>Notes :</u></b> {notes} <br/>
  
</page>