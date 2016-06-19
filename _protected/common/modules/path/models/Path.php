<?php

namespace common\modules\path\models;

use Yii;

/**
 * This is the model class for table "path".
 *
 * @property integer $path_id
 * @property integer $parent_id
 * @property string $name
 * @property string $path_link
 * @property string $description
 * @property string $module_code
 * @property string $obj_class_name
 * @property integer $mode
 * @property string $status
 * @property string $id_column_name
 * @property string $path_type
 * @property integer $search_path_cb
 * @property integer $display_weight
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class Path extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'path';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['parent_id', 'mode', 'search_path_cb', 'display_weight', 'created_by', 'last_update_by'], 'integer'],
            [['status'], 'string'],
            [['created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['name', 'path_link', 'id_column_name'], 'string', 'max' => 256],
            [['description'], 'string', 'max' => 512],
            [['module_code', 'path_type'], 'string', 'max' => 25],
            [['obj_class_name'], 'string', 'max' => 100],
            [['name', 'module_code'], 'unique', 'targetAttribute' => ['name', 'module_code'], 'message' => 'The combination of Name and Module Code has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'path_id' => Yii::t('app', 'Path ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'name' => Yii::t('app', 'Name'),
            'path_link' => Yii::t('app', 'Path Link'),
            'description' => Yii::t('app', 'Description'),
            'module_code' => Yii::t('app', 'Module Code'),
            'obj_class_name' => Yii::t('app', 'Obj Class Name'),
            'mode' => Yii::t('app', 'Mode'),
            'status' => Yii::t('app', 'Status'),
            'id_column_name' => Yii::t('app', 'Id Column Name'),
            'path_type' => Yii::t('app', 'Path Type'),
            'search_path_cb' => Yii::t('app', 'Search Path Cb'),
            'display_weight' => Yii::t('app', 'Display Weight'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }

    public static $icon_stmt_a = [
        'inv' => ['div_class' => 'fa-bank', 'description' => 'Inventory'],
        'sd' => ['div_class' => 'fa-truck', 'description' => 'Sales & Distribution'],
        'pur' => ['div_class' => 'fa-file-text-o', 'description' => 'Purchasing'],
        'bom' => ['div_class' => 'fa-sitemap', 'description' => 'Bills Of Material'],
        'cst' => ['div_class' => 'fa-cubes', 'description' => 'Cost Management'],
        'wip' => ['div_class' => 'fa-tasks', 'description' => 'WIP & MES'],
        'pm' => ['div_class' => 'fa-flask', 'description' => 'Process'],
        'fp' => ['div_class' => 'fa-th-large', 'description' => 'Forecast & Planning'],
        'am' => ['div_class' => 'fa-wrench', 'description' => 'Asset Maintenance'],
        'qa' => ['div_class' => 'fa-search', 'description' => 'Quality'],
        'pos' => ['div_class' => 'fa-shopping-cart', 'description' => 'Point Of Sale'],
        'ec' => ['div_class' => 'fa-globe', 'description' => 'eCommerce'],
        'gl' => ['div_class' => 'fa-money', 'description' => 'General Ledger'],
        'ap' => ['div_class' => 'fa-credit-card', 'description' => 'Payable'],
        'ar' => ['div_class' => 'fa-dollar', 'description' => 'Receivable'],
        'fa' => ['div_class' => 'fa-building', 'description' => 'Fixed Asset'],
        'hr' => ['div_class' => 'fa-users', 'description' => 'Human Resource'],
        'hd' => ['div_class' => 'fa-support', 'description' => 'Service Help Desk'],
        'prj' => ['div_class' => 'fa-briefcase', 'description' => 'Projects'],
        'da' => ['div_class' => 'fa-book', 'description' => 'Document & Analysis'],
        'adm' => ['div_class' => 'fa-database', 'description' => 'Admin'],
        'sys' => ['div_class' => 'fa-cogs', 'description' => 'Global Setup'],
        'ext' => ['div_class' => 'fa-sliders', 'description' => 'Extensions'],
        'tr' => ['div_class' => 'fa-sliders', 'description' => 'Transport'],
    ];

    public function indented_pathMenu($module) {
        $path = Path::$icon_stmt_a[$module];
        $level = 0;
        $parent_path = Path::findOne(["module_code" => $module, "parent_id" => null]);
        $allPaths = '<div class="menu"><ul class="block_menu ' . $path["div_class"] . '>';
        $childs = Path::findAll(["parent_id" => $parent_path->path_id]);
        foreach ($childs as $child_p) {
            $url = $child_p->path_link;
            $path_name = $child_p->name;
            $path_description = $child_p->description;
            $allPaths .= '<ul class="child_menu">';
            $allPaths .= "<li title=\"$path_description\" data-toggle=\"tooltip\" class='parent_menu expandable $path_name '>" . '<a href="' . $url . '">' . $path_name . '</a>';
            $other_child_paths = Path::findAll(["parent_id" => $child_p->path_id]);
            foreach ($other_child_paths as $child_paths_oth) {
                $url_1 = $child_paths_oth->path_link;
                $child_paths_name = ($child_paths_oth->name);
                $child_paths_description = ($child_paths_oth->description);
                $allPaths .= "<li title=\"$child_paths_description\" data-toggle=\"tooltip\" class='expandable $child_paths_name '>" . '<a href="' . $url_1 . '">' . $child_paths_name . '</a>';

                $allPaths .= '</li>';
            }
            $allPaths .= '</ul>';
            $allPaths .= '</li>';
            //}
        }

        $allPaths .= '</ul></div>';
        return $allPaths;
    }

}
