<?php 
$fb =$_SESSION['feedbacks'];
$c = count($fb)-1;
$cssActive =' active';
echo count($fb);
for($i=0; $i<=$c; $i++){
  if($fb[$i]['feedbackWorked']==1){
    $ar = (($fb[$i]['feedbackRR']+$fb[$i]['feedbackTKR']+$fb[$i]['feedbackWR']+$fb[$i]['feedbackTR']+$fb[$i]['feedbackCR'])/5);
    $art = '<i class="bi bi-clipboard2-check text-success"></i><span> Completed</span>';
  }else{
    $ar = $fb[$i]['feedbackOR'];
    $art = '<i class="bi bi-clipboard2-x text-danger"></i><span> No Work Done</span>';
  }
  $fn = ($fb[$i]['feedbackIsAnon']==1) ? '<div class="btn-group dropup"><button type="button" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-info-circle"></i> </button><ul class="dropdown-menu">Client prefers to remain anonymous</ul></div> Client in: '.$fb[$i]['feedbackCpscd'] : $fb[$i]['feedbackCTitle'].' '.$fb[$i]['feedbackCName'] ;
  echo'<div class="carousel-item carousel-review'.$cssActive.'">
            <img src="'.$fb[$i]['projectImage'].'" class="d-block w-100" alt="..." />
            <div class="carousel-caption rounded">
              <h5 class="brand">'.$art.'<span class="px-2"><b>Easy</b><i>Fix</i></span>'.$ar.' <i class="bi bi-star-fill text-warning"></i></h5>
              <p>'.$fb[$i]['feedbackText'].'</p>
              <i>'.$fn.'</i>
            </div>
          </div>';
          $cssActive='';
}
  // echo '<pre>'; print_r($_SESSION['feedbacks']); echo '</pre>';

?>