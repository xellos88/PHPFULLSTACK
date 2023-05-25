<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Boardcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //쿼리 빌더
        //select
        $result = DB::select('select * from categories');
        $no ='5';
        $result = DB::select('select * from categories where no=:no',['no' => $no]);

        // $result = DB::select(
        //     'select * from categories where no = ? and no = ?'
        //     ,['no', 7]);

        $input =['4','7','8'];// category의 no컬럼
        //게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요.(게시글 번호로 오름차순후 정렬후 상위 5개만)

        // $result = DB::select('SELECT b.bno, b.btitle, b.category
                            // FROM boards b
                            // INNER JOIN categories c ON c.no = b.category
                            // WHERE c.no IN (?, ?, ?)
                            // ORDER BY b.bno ASC
                            // LIMIT 5', $input);

        $result = DB::select('SELECT b.bno, b.btitle, b.category
                            FROM boards b
                            INNER JOIN categories c ON c.no = b.category
                            WHERE c.no IN ('.implode(',', $input).')
                            ORDER BY b.bno ASC
                            LIMIT 5');


        // $result = DB::insert('INSERT INTO boards (category, btitle, bcontents, created_at, updated_at)    
        //                     VALUES (:category, :btitle, :bcontents, now(), now())'
        //                     ,[
        //                         'category'  =>'5'
        //                         ,'btitle'   =>'제목'
        //                         ,'bcontents'=>'내용'
        //                     ]);

        // $result = DB::table('boards')
        //          ->where('bno', 506)
        //          ->update([
        //              'btitle' => 'test',
        //              'bcontents' => 'testtest',
        //              'updated_at' => now()
        // ]);

            
        // $result = DB::update('UPDATE boards 
        //                     SET btitle = ?, bcontents = ? ,updated_at=>now() 
        //                     where bno=?'
        //                     ,['test','testtest',506]);
                            
        // $result = DB::delete('DELETE FROM boards WHERE bno IN(?, ?)', ['501','502']);


        //----------------
        //쿼리 빌더 체이닝
        //----------------

        $no='5';
        //$result = DB::select('select * from categories where no=:no',['no' => $no]);
        $result=DB::table('categories')->where('no','=', $no)->get(); 


        //$result = DB::select('select * from categories where no = ? or no =?; //부등호(=)생략 가능
        $no1='5';
        $no2='8';
        //$result=DB::table('categories')->where('no', $no1)->orwhere('no', $no2)->get(); 

        //$result=DB::select('select * from categories where no in(?_?));
        //$result=DB::table('categories')->whereIn('no',[$no1,$no2])->dd();
        
        //select * from categories where NOT IN('5','8')
        // $result=DB::table('categories')->whereNotIn('no',[$no1,$no2])->dd();

        //select id,no,name from categories
        // $result = DB::table('categories')->select('id','no','name')->dd();

        //select id, no, name from categoris order by name desc
        // $result = DB::table('categories')->select('id', 'no', 'name')->orderBy('name', 'desc')->dd();

        //-----------------주의해서 사용 whereRaw()
        // $result = DB::table('categories')->whereRaw('no=',$no1);

        //first() : limit 1
        // $result = DB::table('boards')->orderBy('bno', 'desc')->first();

        //firstOrFail() :first() 같은 동작을 하는데, 실패시 결과가 예외 발생(엘로퀀트 모델 객체에서만 사용 가능)
        // $result = DB::table('boards')->orderBy('bno', 'desc')->firstOrFail();

        //집계 메소드
        // $result = DB::table('boards')->count(); //결과의 레코드수를 반환
        // $result = DB::table('boards')->max('bno'); //해당 컬럼의 최대치를 반환

        // DB::beginTransaction(); // 트랜잭션 시작
        // DB::rollBack();         // 롤백
        // DB::commit();           // 커밋

        //카테고리가 활성화 되어 있는 게시글의 카테고리별 갯수를 출력해주세요()
        //카테고리 번호, 카테고리명, 갯수


        // SELECT c.no, c.name, COUNT(*) AS COUNT
        // FROM categories c
        // JOIN boards b ON b.category = c.no
        // WHERE c.active_flg = '1'
        // GROUP BY c.no, c.name;

        $result = DB::table('categories as c')
                    ->join('boards as b', 'b.category', '=', 'c.no')
                    ->select('c.no', 'c.name')
                    ->selectRaw('COUNT(*) AS count')
                    ->where('c.active_flg', '1')
                    ->groupBy('c.no', 'c.name')
                    ->get();

        $result = DB::table('categories as c')
                    ->join('boards as b', 'b.category', '=', 'c.no')
                    ->select('c.no', 'c.name', DB::raw('COUNT(*) AS count'))
                    ->where('c.active_flg', '1')
                    ->groupBy('c.no', 'c.name')
                    ->get();
                
        dump($result);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
