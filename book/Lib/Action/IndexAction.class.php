<?php
/*class IndexAction extends Action {
    public function index(){ */

     /*   CREATE TABLE IF NOT EXISTS 'think_data'(
            'id' int(18)unsigned NOT NULL AUTO_INCREMENT,
            'data' varchar(255)NOT NULL,
            PRIMARY KEY ('id')
        ) ENGINE=MyISAM DEFAULT CHARSET=UTF8;
        INSERT INTO 'think_data'('id','data')VALUES
            (1,'thinkphp'),
            (2,'php'),
            (3,'framework');
      */


/*  $this->name = 'thinkphp';
        $this->display();
    }
}*/
class IndexAction extends Action {
    public function index(){
        $Data = M('Data');//实例化Data数据类型
        $this->data = $Data->select();
        $this->display();
        }
}
?>
