<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/9
 * Time: 9:04
 */

/**
 * 使用pdo封装一个简单版本的操作数据库的类。
 * 实现构造函数提供，mysql地址，账号，密码，数据库
 * 再实现 查询和执行sql语句的方法
 * Class db
 */
class Db{
    private $db;
    public function __construct($host,$dbname,$username,$password,$charset='utf8'){
        $this->db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $this->db->exec("set names $charset");
    }

    /**
     * @param $sql
     * @param $vs
     * @return array
     */
    public function select($sql,$vs=[],$all=false){
        $stmt=$this->db->prepare($sql);
//        绑定参数并执行
        $stmt->execute($vs);
//        返回执行结果,如果$all为true，则返回全部结果，否则返回一条结果
        return $all?$stmt->fetchAll():$stmt->fetch();
    }
}

$db = new Db('localhost','qy','root','root');
$types = $db->select('select * from nx_type',[],true);
print_r($types);