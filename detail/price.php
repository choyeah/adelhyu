<?php include './header.php'; ?>

<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/r/zf-5.5.2/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8">
    var data = [
        ["1단지", "101", "C", "393,600,000", "분양중"],
        ["1단지", "102", "A", "393,600,000", "분양중"],
        ["1단지", "103", "A", "393,600,000", "분양중"],
        ["1단지", "104", "E", "393,600,000", "분양중"],
        ["1단지", "105", "F", "495,461,000", "분양중"],
        ["1단지", "106", "A", "393,600,000", "분양중"],
        ["1단지", "107", "A", "393,600,000", "분양중"],
        ["1단지", "108", "A", "393,600,000", "분양중"],
        ["1단지", "109", "C", "393,600,000", "분양중"],
        ["1단지", "201", "D", "393,600,000", "분양중"],
        ["1단지", "202", "B", "393,600,000", "분양중"],
        ["1단지", "203", "B", "393,600,000", "분양중"],
        ["1단지", "204", "E", "393,600,000", "분양중"],
        ["1단지", "205", "F", "495,461,000", "분양중"],
        ["1단지", "206", "B", "393,600,000", "분양중"],
        ["1단지", "207", "B", "393,600,000", "분양중"],
        ["1단지", "208", "B", "393,600,000", "분양중"],
        ["1단지", "209", "D", "393,600,000", "분양중"],
        ["2단지", "101", "A", "393,600,000", "분양중"],
        ["2단지", "102", "A", "393,600,000", "분양중"],
        ["2단지", "103", "A", "393,600,000", "분양중"],
        ["2단지", "104", "A", "393,600,000", "분양중"],
        ["2단지", "105", "A", "393,600,000", "분양중"],
        ["2단지", "106", "A", "393,600,000", "계약완료"],
        ["2단지", "107", "A", "393,600,000", "분양중"],
        ["2단지", "108", "A", "393,600,000", "분양중"],
        ["2단지", "201", "B", "393,600,000", "분양중"],
        ["2단지", "202", "B", "393,600,000", "분양중"],
        ["2단지", "203", "B", "393,600,000", "분양중"],
        ["2단지", "204", "B", "393,600,000", "분양중"],
        ["2단지", "205", "B", "393,600,000", "분양중"],
        ["2단지", "206", "B", "393,600,000", "청약"],
        ["2단지", "207", "B", "393,600,000", "분양중"],
        ["2단지", "208", "B", "393,600,000", "분양중"],
        ["3단지", "101", "A", "393,600,000", "분양중"],
        ["3단지", "102", "A", "393,600,000", "분양중"],
        ["3단지", "103", "C", "393,600,000", "분양중"],
        ["3단지", "104", "A", "393,600,000", "분양중"],
        ["3단지", "105", "A", "393,600,000", "분양중"],
        ["3단지", "106", "E", "393,600,000", "분양중"],
        ["3단지", "107", "D", "393,600,000", "분양중"],
        ["3단지", "108", "A", "393,600,000", "분양중"],
        ["3단지", "109", "A", "393,600,000", "분양중"],
        ["3단지", "201", "B", "393,600,000", "분양중"],
        ["3단지", "202", "B", "393,600,000", "분양중"],
        ["3단지", "203", "C", "393,600,000", "분양중"],
        ["3단지", "204", "B", "393,600,000", "분양중"],
        ["3단지", "205", "B", "393,600,000", "분양중"],
        ["3단지", "206", "E", "393,600,000", "분양중"],
        ["3단지", "207", "D", "475,665,000", "분양중"],
        ["3단지", "208", "B", "393,600,000", "분양중"],
        ["3단지", "209", "B", "393,600,000", "분양중"],
        ["4단지", "101", "A", "393,600,000", "분양중"],
        ["4단지", "102", "A", "393,600,000", "분양중"],
        ["4단지", "103", "A", "393,600,000", "분양중"],
        ["4단지", "104", "A", "393,600,000", "분양중"],
        ["4단지", "105", "F", "442,008,000", "분양중"],
        ["4단지", "106", "F", "442,008,000", "분양중"],
        ["4단지", "107", "C", "442,027,000", "분양중"],
        ["4단지", "108", "H", "421,622,000", "분양중"],
        ["4단지", "109", "C", "442,027,000", "분양중"],
        ["4단지", "110", "D", "442,007,000", "분양중"],
        ["4단지", "111", "G", "472,096,000", "분양중"],
        ["4단지", "112", "E", "472,276,000", "계약완료"],
        ["4단지", "201", "B", "393,600,000", "분양중"],
        ["4단지", "202", "B", "393,600,000", "분양중"],
        ["4단지", "203", "B", "393,600,000", "분양중"],
        ["4단지", "204", "B", "393,600,000", "분양중"],
    ]
    $(document).ready(function() {
        $('#example').dataTable(
            {
                data: data,
                autoFill: true,
                language: {
                    "lengthMenu": "_MENU_ 개씩 보기",
                    "zeroRecords": "검색 결과가 없습니다.",
                    "info": "_PAGES_ 페이지 중 _PAGE_ 페이지 ",
                    "infoEmpty": "데이터가 없습니다.",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "검색",
                    "paginate": {
                        "first":      "처음",
                        "last":       "마지막",
                        "next":       "다음",
                        "previous":   "이전"
                    },
                }
            }
        );
    } );
</script>
<link href="asset/up.css" rel="stylesheet" type="text/css">
<div class="container">
    <div class="center" style="text-align: center;">
        <h1 id="detail-h1" >분양가 정보</h1>
        <br><br>
        <!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
    </div>
    <div class="large-12 columns">

        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>단지</th>
                <th>호수</th>
                <th>타입</th>
                <th>분양가</th>
                <th>계약현황</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>단지</th>
                <th>호수</th>
                <th>타입</th>
                <th>분양가</th>
                <th>계약현황</th>
            </tr>
            </tfoot>
            <tbody>
            </tbody>
        </table>

    </div>
</div>

<script type="text/javascript">
    // For demo to fit into DataTables site builder...
    $('#example')
        .removeClass( 'display' )
        .addClass('tdisplay');
</script>

<?php include './footer.php'; ?>
