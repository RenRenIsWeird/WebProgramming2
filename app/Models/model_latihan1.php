<?php
namespace App\Models;

use App\Controllers\BaseController;
use CodeIgniter\Models;

class model_latihan1 extends BaseController
{
//membuat variable untuk menampung nilai
public $nilai1, $nilai2, $hasil;
//method penjumlahan
public function jumlah($n1 = null, $n2 = null)
{
$this->nilai1 = $n1;
$this->nilai2 = $n2;
$this->hasil = $this->nilai1 + $this->nilai2;
return $this->hasil;
}
}