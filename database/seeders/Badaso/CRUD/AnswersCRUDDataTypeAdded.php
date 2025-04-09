<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class AnswersCRUDDataTypeAdded extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();

        try {

            $data_type = Badaso::model('DataType')->where('name', 'answers')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'answers')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'answers',
                'slug' => 'answers',
                'display_name_singular' => 'Answers',
                'display_name_plural' => 'Answers',
                'icon' => 'sms',
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => false,
                'updated_at' => '2024-05-30 04:34:48',
                'created_at' => '2024-05-30 04:34:48',
                'id' => 3,
            ));

            Badaso::model('Permission')->generateFor('answers');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/answers')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Answers',
                    'target' => '_self',
                    'icon_class' => 'sms',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_answers',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/answers';
                $menu_item->title = 'Answers';
                $menu_item->target = '_self';
                $menu_item->icon_class = 'sms';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_answers';
                $menu_item->order = $order;
                $menu_item->save();
            }

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

           throw new Exception('Exception occur ' . $e);
        }
    }
}
