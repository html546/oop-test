<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/8
 * Time: 19:09
 */

class File{
    private $filename;
//    私有的属性来保存文件句柄,同样不能被外面修改
    private $fp;

    /**
     * 构造函数用来打开文件
     * File constructor.
     * @param $filename
     */
    function __construct($filename)
    {
        $this->filename = $filename;
        $this->fp = fopen($filename,'w+');
        if(!$this->fp){
            exit("打开文件:".$filename."失败");
        }
        echo "打开文件成功";
    }
    function write($msg){
        fwrite($this->fp,$msg);
    }

    /**
     * 读出文件中所有的内容
     * @return bool|string
     */
    function readAll(){
        return fread($this->fp,filesize($this->filename));
    }
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        fclose($this->fp);
    }
}
$file = new File("./1.txt");
//exit中断脚本，析构函数依旧会被调用
exit();
$file->write("www.noxue.com");
