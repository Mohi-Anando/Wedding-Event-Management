<?php 

class Json{ 
    private $jsonFile = "json_files/data.json"; 
     
 
    public function getRows(){ 
        if(file_exists($this->jsonFile)){ 
            $jsonData = file_get_contents($this->jsonFile); 
            $data = json_decode($jsonData, true); 
             
            if(!empty($data)){ 
                usort($data, function($a, $b) { 
                    return $b['id'] - $a['id']; 
                }); 
            } 
             
            return !empty($data)?$data:false; 
        } 
        return false; 
    } 
     
    public function getSingle($id){ 
        $jsonData = file_get_contents($this->jsonFile); 
        $data = json_decode($jsonData, true); 
        $singleData = array_filter($data, function ($var) use ($id) { 
            return (!empty($var['id']) && $var['id'] == $id); 
        }); 
        $singleData = array_values($singleData)[0]; 
        return !empty($singleData)?$singleData:false; 
    } 
     
    public function insert($newData){ 
        if(!empty($newData)){ 
            $id = time(); 
            $newData['id'] = $id; 
             
            $jsonData = file_get_contents($this->jsonFile); 
            $data = json_decode($jsonData, true); 
             
            $data = !empty($data)?array_filter($data):$data; 
            if(!empty($data)){ 
                array_push($data, $newData); 
            }else{ 
                $data[] = $newData; 
            } 
            $insert = file_put_contents($this->jsonFile, json_encode($data)); 
             
            return $insert?$id:false; 
        }else{ 
            return false; 
        } 
    } 
     
    public function update($upData, $id){ 
        if(!empty($upData) && is_array($upData) && !empty($id)){ 
            $jsonData = file_get_contents($this->jsonFile); 
            $data = json_decode($jsonData, true); 
             
            foreach ($data as $key => $value) { 
                if ($value['id'] == $id) { 
                    if(isset($upData['pname'])){ 
                        $data[$key]['pname'] = $upData['pname']; 
                    } 
                    if(isset($upData['photoN'])){ 
                        $data[$key]['photoN'] = $upData['photoN']; 
                    } 
                    if(isset($upData['cineN'])){ 
                        $data[$key]['cineN'] = $upData['cineN']; 
                    } 
                    if(isset($upData['price'])){ 
                        $data[$key]['price'] = $upData['price']; 
                    } 
                } 
            } 
            $update = file_put_contents($this->jsonFile, json_encode($data)); 
             
            return $update?true:false; 
        }else{ 
            return false; 
        } 
    } 
     
    public function delete($id){ 
        $jsonData = file_get_contents($this->jsonFile); 
        $data = json_decode($jsonData, true); 
             
        $newData = array_filter($data, function ($var) use ($id) { 
            return ($var['id'] != $id); 
        }); 
        $delete = file_put_contents($this->jsonFile, json_encode($newData)); 
        return $delete?true:false; 
    } 
}