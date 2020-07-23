<?php

class ModelCompany extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  public function allCompany() {
    $sql = "SELECT * FROM company_tbl WHERE status = 1";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function allPicWhere($tbl, $keyword, $valueKeyword) {
    $sql = "SELECT * FROM $tbl WHERE $keyword = '$valueKeyword' AND status = 1";
    $query = $this->db->query($sql);
    $result = $query->result();
    return $result;
  }

  public function findData($tbl, $keyword, $valueKeyword) {
    $sql = "SELECT * FROM $tbl WHERE $keyword = '$valueKeyword'";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      $result = $query->result();
      return $result[0];
    } else {
      return null;
    }
    $query->free_result();
  }

  public function insertData($tbl, $data) {
    $this->db->insert($tbl, $data);
  }

  public function deleteData($tbl, $namaKolom, $kataKunci, $id) {
    $sql = "UPDATE $tbl SET $namaKolom=0 WHERE $kataKunci = '$id'";
    $this->db->query($sql);
  }

  public function updateData($tbl, $data, $namaKolom, $id) {
    $this->db->where($namaKolom, $id);
    $this->db->update($tbl, $data);
  }

}