<?php
namespace app\index\controller;     // 该文件位于application\index\controller文件夹
use think\Controller;   // 用于与V层进行数据传递
use app\common\model\Teacher;       // 教师模型
/**
 * 教师管理，继承think\Controller后，就可以利用V层对数据进行打包了。
 */
class TeacherController extends Controller
{
    public function index()
    {
        /* $Teacher = new Teacher;
        $teachers = $Teacher->select();

        // 获取第0个数据
        $teacher = $teachers[0];

        // 调用上述对象的getData()方法
        var_dump($teacher->getData()); */
        $Teacher = new Teacher; 
        $teachers = $Teacher->select();

        // 向V层传数据
        $this->assign('teachers', $teachers);

        // 取回打包后的数据
        $htmls = $this->fetch();

        // 将数据返回给用户
        return $htmls;
    }
}
