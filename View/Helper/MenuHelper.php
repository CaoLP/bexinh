<?php
/**
 * Created by PhpStorm.
 * User: LePhan
 * Date: 3/23/15
 * Time: 6:38 AM
 */
App::uses('Helper', 'View');
class MenuHelper extends Helper
{
    public function loopChildMenu($data, $parent_name, $prefix = '__')
    {
        foreach ($data as $child):
            ?>
            <tr>
                <td><?php echo $prefix . h($child['name']); ?>&nbsp;</td>
                <td><?php echo h($child['icon']); ?>&nbsp;</td>
                <td><?php echo h($child['url']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->_View->Html->link($parent_name, array('controller' => 'admin_menus', 'action' => 'view', $child['parent_id'])); ?>
                </td>
                <td><?php echo h($child['lft']); ?>&nbsp;</td>
                <td><?php echo h($child['rght']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->_View->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $child['id']), array('escape' => false)); ?>
                    <?php echo $this->_View->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $child['id']), array('escape' => false)); ?>
                    <?php echo $this->_View->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $child['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $child['id'])); ?>
                </td>
            </tr>
        <?php
        endforeach;
    }

    public function createMenu($menu, $name ,$class = '')
    {
        foreach ($menu[$name]['FrontMenu'] as $item):
            $submenu = false;
            if (count($item['ChildFrontMenu']) > 0) $submenu = true;
            if (!$submenu):
                ?>
                <li class="<?php echo $class;?>">
                    <a href="<?php echo $item['url']; ?>"  class=" <?php if ($item['url'] == $this->request->here) echo 'active'; ?>"><i
                            class="<?php echo $item['icon']; ?>"></i><?php echo $item['name']; ?>
                    </a>
                </li>
            <?php
            else:
                $active = '';
                $in = '';
                $html = '<li class="'.$class.'">
                    <a href="#sub' . $item['id'] . '" class=" {active}" data-toggle="collapse">
                        <i class="' . $item['icon'] . '"></i>' . $item['name'] . ' <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </li>';
                if($item['url'] == $this->request->here){
                    $in = 'in';
                    $active = 'active';
                }
                $html .= '<li class="collapse {flag} '.$class.'" id="sub' . $item['id'] . '">
                    <a href="' . Router::url($item['url']) . '" class="'.$active.'">
                    <i class="' . $item['icon'] . '"></i>' . $item['name'] . '</a>';

                foreach ($item['ChildFrontMenu'] as $child):
                    $subactive = '';
                    if ($child['url'] == $this->request->here) {
                        if($active == '') $active = 'active';
                        $subactive = 'active';
                        $in = 'in';
                    }
                    $html .= '<a href="' .  Router::url($child['url']) . '"
                       class=" ' . $subactive . '"><i
                            class="' . $child['icon'] . '"></i>' . $child['name'] . '</a>';
                endforeach;
                $html .= '</li>';
                $html = str_replace('{active}', $active, $html);
                $html = str_replace('{flag}', $in, $html);
                echo $html;
            endif;
        endforeach;
    }
    public function loadCategory($categories, $parent = 'Category' , $child = 'children', $sub = false){
        $html = '';
        if($sub) $html .= '<ul class="dropdown-menu">';
        foreach($categories as $cat){
            $url =  $this->_View->Html->url(
                array(
                    'controller' => 'pages',
                    'action' => 'categories',
                    'category' => $cat[$parent]['slug']
                )
            );
            $html.='<li><a href="'.$url.'">'.$cat[$parent]['name'].'</a>';
            if(count($cat[$child])>0){
                $html .= $this->loadCategory($cat[$child], $parent, $child, true);
            }
            $html.='</li>';
        }
        if($sub) $html .= '</ul>';
        return $html;
    }
    public function loadCategory2($categories, $parent = 'Category' , $child = 'children'){
        $html = '';
        foreach($categories as $cat){
            $url =  $this->_View->Html->url(
                array(
                    'controller' => 'pages',
                    'action' => 'categories',
                    'category' => $cat[$parent]['slug']
                )
            );
            $html.='<li><a href="'.$url.'"><span class="ic_cm">'.$cat[$parent]['icon'].'</span>'.$cat[$parent]['name'].'<span class="ic_cm  icon_arr">K</span></a>';
            if(count($cat[$child])>0){
                $html .= '<div class="menu_ver_hover">';
                $html .= $this->loadCategory2_child($cat[$child], $parent, $child);
                $html .= '</div>';
            }
            $html.='</li>';
        }
        return $html;
    }
    public function loadCategory2_child($categories, $parent = 'Category' , $child = 'children', $sub = false){
        $html = '';
        if(!$sub) $html .= '<ul class="menu_ver_item">';
        foreach($categories as $cat){
            $url =  $this->_View->Html->url(
                array(
                    'controller' => 'pages',
                    'action' => 'categories',
                    'category' => $cat[$parent]['slug']
                )
            );
            $html .= '<li';
            if(!$sub) $html.= ' class="bold" ';
            $html.='>
                    <a href="'.$url.'">
                    '.$cat[$parent]['name'].'
                    </a>';
            $html.='</li>';
            if(count($cat[$child])>0){
                $html .= $this->loadCategory2_child($cat[$child], $parent, $child, true);
            }
        }
        if(!$sub) $html .= '</ul>';
        return $html;
    }
}
