<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 34,
                'title' => 'currency_create',
            ],
            [
                'id'    => 35,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 36,
                'title' => 'currency_show',
            ],
            [
                'id'    => 37,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 38,
                'title' => 'currency_access',
            ],
            [
                'id'    => 39,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 40,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 41,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 42,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 43,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 44,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 45,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 46,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 47,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 48,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 49,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 50,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 51,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 52,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 53,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 54,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 55,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 56,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 57,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 58,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 59,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 60,
                'title' => 'client_create',
            ],
            [
                'id'    => 61,
                'title' => 'client_edit',
            ],
            [
                'id'    => 62,
                'title' => 'client_show',
            ],
            [
                'id'    => 63,
                'title' => 'client_delete',
            ],
            [
                'id'    => 64,
                'title' => 'client_access',
            ],
            [
                'id'    => 65,
                'title' => 'project_create',
            ],
            [
                'id'    => 66,
                'title' => 'project_edit',
            ],
            [
                'id'    => 67,
                'title' => 'project_show',
            ],
            [
                'id'    => 68,
                'title' => 'project_delete',
            ],
            [
                'id'    => 69,
                'title' => 'project_access',
            ],
            [
                'id'    => 70,
                'title' => 'note_create',
            ],
            [
                'id'    => 71,
                'title' => 'note_edit',
            ],
            [
                'id'    => 72,
                'title' => 'note_show',
            ],
            [
                'id'    => 73,
                'title' => 'note_delete',
            ],
            [
                'id'    => 74,
                'title' => 'note_access',
            ],
            [
                'id'    => 75,
                'title' => 'document_create',
            ],
            [
                'id'    => 76,
                'title' => 'document_edit',
            ],
            [
                'id'    => 77,
                'title' => 'document_show',
            ],
            [
                'id'    => 78,
                'title' => 'document_delete',
            ],
            [
                'id'    => 79,
                'title' => 'document_access',
            ],
            [
                'id'    => 80,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 81,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 82,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 83,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 84,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 85,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 86,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 87,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 88,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 89,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 90,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
