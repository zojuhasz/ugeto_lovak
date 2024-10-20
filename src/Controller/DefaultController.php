<?php

namespace Drupal\lovak\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\Core\Config\ConfigFactoryInterface;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {


  /**
   * Hello.
   *
   * @return array
   *   Return Hello string.
   */
  
  public function uninstall() {
  
  //Kiszedjük a felvitt lovakat
  $content_type = 'lovak';
  $nids = \Drupal::entityQuery('node')->accessCheck(TRUE)
    ->condition('type', $content_type)
    ->execute();

  if (!empty($nids)) {
    // Node-ok betöltése és törlése
    $storage_handler = \Drupal::entityTypeManager()->getStorage('node');
    $nodes = $storage_handler->loadMultiple($nids);
    $storage_handler->delete($nids);
  }
  /////////
  
  
  //Töröljük a lovakhoz tartozó összes táblát
  $schema = \Drupal::database()->schema();
      
  $out='';
  // Ellenőrizzük, hogy létezik-e a tábla
  $tbl_name='field_akti';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_anya';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_anyanev';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_apa';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_apanev';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_belyeg';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_egybevetes';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_ellet';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_elozo';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_ev';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_exp_kelt';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_exp_orsz';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_fedez';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_fedezomen';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_fm';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_herel';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_iker';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_imp_kelt';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_imp_orsz';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_jegyzet';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_jelek';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_jelx';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_jel_';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_kimult';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_loazon';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_loazon_long';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_lo_vagy_fed';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_neme';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_neve';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_nevel_tenyeszt';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_nlkft_iloid';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_no';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_orszag';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_penz';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_regi_rek';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_rekord';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_rekord_ok';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_szine';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_szures';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_transzponder';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_tulaj';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_ueln';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_ujrek';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_upgrd';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  $tbl_name='field_utal';$tbl_name_node = 'node__'.$tbl_name; if ($schema->tableExists($tbl_name_node)) {$out.="<br>DEL ".$tbl_name_node;$schema->dropTable($tbl_name_node);}else{$out.="<br>NINCS ".$tbl_name_node;}$tbl_name_noderev = 'node_revision__'.$tbl_name; if ($schema->tableExists($tbl_name_noderev)) {$out.="<br>DEL ".$tbl_name_noderev;$schema->dropTable($tbl_name_noderev);}else{$out.="<br>NINCS ".$tbl_name_noderev;}
  /////////////
  
  
  //config tbl ból törlés
  $config_factory = \Drupal::service('config.factory');

// Betöltöd a konfigurációt a nevével.
$config = $config_factory->getEditable('lovak.settings');

// Törlöd a konfigurációt.
$config->delete();
  
  return [
      '#type' => 'markup',
      '#markup' => $this->t($out),
    ];
  }
  
  
  public function install() {
  
  
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => '?',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'AH',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'AT',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'BE',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'CA',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'CS',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'CZ',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'DE',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'DK',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'EE',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'FI',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'FR',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'HR',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'HU',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'n.a.',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'NL',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'NO',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'NZ',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'RO',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'RS',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'RU',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'SE',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'SI',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'SK',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'SR',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'SU',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'UA',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'US',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'orszag','name' => 'YU',]); $term->save();

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'neme','name' => '?',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'neme','name' => 'h',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'neme','name' => 'k',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'neme','name' => 'm',]); $term->save();


  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => '?',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'f',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'f/sz',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'p',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'p/stp',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'p/vlp',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 's',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'stp',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'stp/f',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'stp/sz',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'sz',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'sz/stp',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'tarka',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'szine','name' => 'vlp',]); $term->save();

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'fedezomen','name' => '?',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'fedezomen','name' => 'IGEN',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'fedezomen','name' => 'NEM',]); $term->save();

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'hirek','name' => 'Egyéb hírek',]); $term->save(); 
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'hirek','name' => 'Lovaregylet hírei',]); $term->save(); 
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'hirek','name' => 'Szolgáltatások',]); $term->save(); 
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'hirek','name' => 'Tenyésztés',]); $term->save(); 
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'hirek','name' => 'Versenyzés',]); $term->save(); 

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'lo_vagy_fed','name' => '?',]); $term->save(); 
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'lo_vagy_fed','name' => 'FEDEZTETES',]); $term->save();   
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'lo_vagy_fed','name' => 'LO',]); $term->save();   
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'lo_vagy_fed','name' => 'SIKERTELEN FEDEZTETES',]); $term->save();     

  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'publikaciok','name' => 'egyéb publikációk',]); $term->save();  
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'publikaciok','name' => 'idézetek',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'publikaciok','name' => 'Lovaregylet publikációi',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'publikaciok','name' => 'saját publikációk',]); $term->save();
  $term = \Drupal\taxonomy\Entity\Term::create(['vid' => 'publikaciok','name' => 'tudományos linkek',]); $term->save();  
  

    
    
    
    return [
      '#type' => 'markup',
      '#markup' => $this->t('<h2>Taxonomyk feltoltese</h2>')
    ];
  }

}
