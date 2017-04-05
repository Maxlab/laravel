<?php

use App\Models\Project;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // get all users where projects = 5
        //  and sum(payments) >= n (1000)
//        $projects = \App\Models\Project::whereHas('payments', function ($q) {
//            $q->select(DB::raw('project_id, count(price) as count_price, sum(price) as total_price'))->groupBy('project_id')->having('total_price', '>', 800);
//        })->with(['payments' => function ($q) {
//            $q->where('price', '>', 40)->orderBy('price', 'DESC');
//        }])->get();
//        
//        DB::table('payments')->toSql();
//        DB::table('payments')->select(['max(price)', 'project_id'])->groupBy('project_id')->toSql();
//        DB::table('payments')->select(['max(price)', 'project_id'])->groupBy('project_id')->get();
//
//        DB::table('payments')->select('project_id', 'count(price) as total_price')->groupBy('project_id')->toSql();
//        DB::table('payments')->select(DB::raw('project_id, count(price) as count_price, sum(price) as total_price'))->groupBy('project_id')->having('total_price',
//            '>', 500)->get();

//        $project = Project::find(1);
//
//        /** @var Tag $tagRem */
//        $tagRem = Tag::where(['name' => 'rem'])->first();
//        $tagRem->payments()->get();
//
//
//        // PROBLEM
//        // get all tags for payments
//        /** @var Collection $tagsInPayments */
//        $tagsInPayments = Tag::has('payments')->get();
//        $tagsInPaymentsIds = Tag::doesntHave('payments')
//            ->orderBy('name', 'ASC')->orderBy('id', 'ASC')->pluck('name', 'id');
//
//        $tagsInPaymentsIds = Tag::has('payments')->orderBy('id', 'DESC')->take(5)->pluck('name', 'id');
//
//        $tagsInPaymentsSelect = $tagsInPayments->combine(['id', 'name']);
//

    }

}
