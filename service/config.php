<?php
header('content-type:text/html;charset=utf-8');
/**
 * Class config  数据库配置类
 *  1.判断文件是否存在
 *  2.判断配置是否是否存在
 *  3.缓存配置
 */
class config
{
    /**
     * 用于取出单个数据
     * @param $name  dbconfig.php 数组下标
     * @param $file  文件
     */
    static public $conf=[];//储存资源
    static public function getFrist($name,$file){
        //echo self::$conf[$file];
        if(isset(self::$conf[$file])){//如果文件已经引入 就直接从静态数组中取
            return self::$conf[$file][$name];
        }else{
            $path = '/service/'.$file.'.php';
            if(file_exists($path)){//判断文件是否存在
                $conf = include_once $path;
                if(isset($conf[$name])){
                    self::$conf[$file]=$conf;//将文件资源存储到我们的静态数组中
                    return $conf[$name];
                }else{
                    throw new \Exception('文件配置不存在...'.$name);
                }
            }else{
                throw new \Exception('文件不存在...'.$file);
            }
        }

    }

    /**
     * 取出文件所有配置
     * @param $file
     * @return mixed
     */
    static public function getAll($file){
        if(isset(self::$conf[$file])){//如果文件已经引入 就直接从静态数组中取
            return self::$conf[$file];
        }else{
            $path = $file.'.php';
            if(file_exists($path)){//判断文件是否存在
                $conf = include_once $path;
                self::$conf[$file]=$conf;//将文件资源存储到我们的静态数组中
                return $conf;
            }else{
                throw new \Exception('文件不存在...'.$file);
            }
        }
    }

}
//测试
//getFrist
//echo config::getFrist('HOST','dbconfig');
//echo "<br>";
//getAll
//$db_data= config::getAll('dbconfig');
//echo $db_data['HOST'];
 