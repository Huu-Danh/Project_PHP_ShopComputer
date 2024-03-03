Công nghệ sử dụng trong đồ án:
    - PHP/PDO
    - phpMyAdmin
    - HTML/CSS/JS
    - Bootstrap/jQuery
Template:
    - Frontend:
        - Trang chủ
        - Trang danh sách sản phẩm
        - Trang chi tiết sản phẩm
        - Trang Thông tin
        - Trang chính sách bảo hành
        - Trang liên hệ
        - Trang giỏ hàng
        - Trang thanh toán
        - Trang checkout
    - Admin:
        - Tài khoản người dùng:
            Quản lý role (Admin, User)
            Quản lý người dùng: Admin, User
                Hiển thị danh sách thêm/xóa/sửa
            Đăng ký tài khoản
            Đăng nhập
        - Quản lý danh mục sản phẩm
        - Quản lý sản phẩm
        - Quản lý đơn hàng
            Hiển thị được danh sách đơn hàng -> hiển thị giảm dần theo thời gian (quản lý được các trạng thái đơn hàng)
        - Quản lý phản hồi


Phân tích thiết kế database

1/ Bảng Role:
    - id: int -> khóa chính tự tăng
    - name: varchar(20)

2/ Bảng User
    - id: int -> khóa chính tự tăng
    - user_name: varchar(50)
    - fullname -> varchar(255)
    - email -> varchar(150)
    - phone  -> varchar(20)
    - address -> varchar(255)
    - password -> varchar(32)
    - role_id -> int -> foregin key -> role(id)
3/ Bảng Danh Mục -> Category
    - id: int -> khóa tự động tăng
    - name: varchar(255)
4/ Bảng sản phẩm -> Product
    - id: int -> khóa tự động tăng
    - category_id -> int  -> foregin key -> Category(id)
    - name: varchar(255)
    - price: int 
    - discount: int
    - describe: text
    - update_at: datetime
    - Image: varchar(255)
    - Image1: varchar(255)
    - Image2: varchar(255)
    - Image3: varchar(255)
    - Sold: int
    - Inventory: int
    - View: int
    - Comment: int
    - New: int
    - Delete: int

5/ Bảng phản hồi: Feedback
    - id: int -> khóa tự động tăng
    - name: varchar(255)
    - email: varchar(150)
    - message: text

6/ Bảng nhà cung cấp: Supplier
    - id: int -> khóa tự động tăng
    - name: varchar(255)
    - address: varchar(255)
    - email: varchar(150)
    - phone: varchar(12)
7/ Bảng phiếu nhập: Receipt
    - id: int -> khóa tự động tăng
    - supplier_id: int -> foregin key Supplier(id)
    - update_at: datetime
    - Delete: int
8/ Bảng chi tiết phiếu nhập: Detail Receipt
    - id: int -> khóa tự động tăng
    - receipt_is: int -> foregin key Receipt(id)
    - product_id: int -> foregin key Product(id)
    - price: int
    - quantity: int
9/ Bảng Khách hàng: Client
    - id: int -> khóa tự động tăng
    - user_id: int -> foregin key User(id)
    - name: varchar(255)
    - address: varchar(255)
    - phone: varchar(12)

10/ Bảng Đơn đặt hàng: The order
    - id: int -> khóa tự động tăng
    - client_id: int -> foregin key Client(id)
    - order_date: datetime
    - delivery_status: varchar(255)
    - delivery_date: datetime
    - Paid: int
    - Cancel: int
    - Delete: int
11/ Bảng chi tiết đơn hàng: Detail the ortder   
    - id: int -> khóa tự động tăng
    - order_id: int -> foregin key The order(id)
    - product_id: int -> foregin key Product(id)
    - product_name: varchar(255)
    - quantity: int
    - price: int