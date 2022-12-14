<div id="content" class="container-fluid px-0">
    <div class="header-content">
        <h3 class="header-title"></h3>
        <div class="header-content-left">
            <div class="item-header-content">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle"></i>
                        ADMINTOR
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Tài khoản</a>
                        <a class="dropdown-item" href="#">Thoát</a>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="card mt-3 ml-2">
        
        <div class="card-header">
            <h5 class=" ">Danh sách đơn hàng</h5>
            <div class="font-weight-bold d-flex justify-content-between align-items-center">
                <div class="form-search form-inline">
                    <form action="#">
                        <input type="" id="input-search-after" style="width:300px" class="form-control form-search" placeholder="Nhập tên sản phẩm để tìm kiếm">
                        <button class="search-product" ><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="text-capitalize" style="font-size:14px">
                    Thời gian: 
                    <input type="date" class="border-top-0 border-left-0 border-right-0"> ~ <input type="date" class="border-top-0 border-left-0 border-right-0">
                </div>
            </div>
            
        </div>
        <div class="card-body">
            <div class="analytic status-order status-product" style="font-size:14px">
                <a class="text-primary active-status">Tất cả<span class="text-muted">(10)</span></a>
                <a class="text-primary">Chờ xác nhận<span class="text-muted">(5)</span></a>
                <a class="text-primary">Đã xác nhận<span class="text-muted">(20)</span></a>
                <a class="text-primary">Đang xử lý<span class="text-muted">(20)</span></a>
                <a class="text-primary">Chờ giao hàng<span class="text-muted">(20)</span></a>
                <a class="text-primary">Đang giao hàng<span class="text-muted">(20)</span></a>
                <a class="text-primary">Đã giao hàng<span class="text-muted">(20)</span></a>
                <a class="text-primary">Hoàn tất<span class="text-muted">(20)</span></a>
                <a class="text-primary">Đã hủy<span class="text-muted">(20)</span></a>
                <a class="text-primary">Giỏ hàng<span class="text-muted">(20)</span></a>
            </div>
            <table class="table table-striped table-checkall" style="font-size:14px!important; border: none; table-layout: auto;width: 100%">
                <thead>
                    <tr>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Doanh thu</th>
                        <th scope="col">Ngày đặt hàng</th>
                        <th scope="col">Trạng thái đơn hàng</th>
                        <th scope="col">Trạng thái đối soát</th>
                        <th scope="col">Thao tác</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td style="width: 20%">112233</td>
                        <td style="width: 16%">3,435,333đ</td>
                        <td style="width: 16%">03-03-2022</td>
                        <td style="width: 16%"><span class="badge badge-success">Còn hàng</span></td>
                        <td style="width: 16%" class="text-success">Đã thanh toán</td>
                        <td style="width: 16%">
                            <a href="#" class="btn btn-info btn-sm rounded-0 text-white " type="button" data-toggle="tooltip" data-placement="top" title="Xem sản phẩm trên web"><i class="fas fa-eye rounded-circle"></i></a>
                            <a href="#" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Sửa sản phẩm"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">Trước</span>
                            <span class="sr-only">Sau</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>