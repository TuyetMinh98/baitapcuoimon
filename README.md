# CALCULATOR - ỨNG DỤNG WEB MÁY TÍNH BỎ TÚI MIỄN PHÍ
<p>++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++</p>
<h1>Mô tả bài toán</h1>
<h3>Công dụng</h3>

<h4> Công nghệ thông tin đang từng bước đi vào cuộc sống của chúng ta như một người bạn đồng hành, nó có vai trò rất lớn trong sự phát triển của đất nước và trong đời sống của con người. Xây dựng ứng dụng máy tính bỏ túi CALCULATOR để giúp ích cho nhu cầu tính toán của con người với tốc độ nhanh và chính xác.</h4>
<p> - Tính toán kết quả của các phép tính yêu cầu của người dùng từ cơ bản đến nâng cao. Hệ thống mới gồm các chức năng sau:</p>
<p> + Nhập: Cho phép nhập các số trên bàn phím, các phép toán số học, các phương trình, các phép toán logic...vào trong máy tính.</p>

 <p> + Xử lý:</p>
  
- Các phép tính cơ bản như cộng (+), trừ (-), nhân (*), chia (/).

- Các phép tính nâng cao như: sin, cos, tan, mũ, giai thừa,..
    
- Các phép tính khó như: giải phương trình bậc 2, bậc 3; logic cho hàm mũ,...

- Đổi về số nhị phân để tính toán.

- Giải ma trận 2,3,4.

- Đổi độ C sang độ F và ngược lại.

 <p> + Hiển thị: Sau khi xử lý xong phép toán thì sẽ hiện kết quả của phép tính mà nó vừa xử lý xong lên màn hình ngay dòng kết quả. Hiển thị kết quả số nhị phân nếu sử dụng chức năng tính bằng số nhị phân.</p>
 
 <p> + Lưu các kết quả gần nhất để tiện cho người sử dụng.</p>
 
<h3>Ứng dụng</h3>

<p> - Áp dụng cho các đa đối tượng từ các bạn học sinh sinh viên, đến các ngành nghê khác như: giáo viên, kinh doanh,...</p>
<p> - Sự dụng cho các đối tượng cụ thể thuộc các môi trường cụ thể như trường học, môi trường doanh nghiệp,...</p>

<h1>Mục đích xây dựng bài toán</h1>
<h4>Chiếc máy tính bỏ túi là dụng cụ học tập quen thuộc đối với nhiều thế hệ học sinh - sinh viên. Ngoài một công cụ hỗ trợ đắc lực trong việc học tập và thi cử, máy tính còn được sử dụng rộng rãi trong các lĩnh vực khác như kinh doanh, tài chính và trong nhiều lĩnh vực chuyên môn khác. Một thiết bị đơn giản có thể thay thế bạn tính toán những phép tính đơn giản mà không cần dùng phương pháp truyền thống là viết ra giấy hay tính nhẩm. Máy tính giúp con người thực hiện được các phép tính chính xác và nhanh chóng hơn.</h4>
  <h3> Đầu vào/ đầu ra của bài toán</h3>
  <p> + Input: </p>
  
- Các toán hạng từ 0 đến 9

- Dấu phẩy thập phân.

-	Các toán tử cộng, trừ, nhân, chia.

-	Các toán tử sin, cos, căn bậc 2, bình phương.

-	Số nguyên a, b, c (cho chức năng giải phương trình).

-	Tác động Xóa.	

<p>Output: </p>

-	Các toán hạng, số thập phân được nhập.

-	Kết quả các phép tính.

-	Nghiệm của phương trình.

-	Xóa màn hình máy tính hiện có (trả về 0).

<h3>	Hướng giải quyết bài toán</h3>
<p>+ Thuật toán xử lý nhập các toán tử và toán hạng: Dùng phương thức POST để lấy các toán tử, toán hạng từ các Button ứng với nó.</p>
<p>+ Thuật toán xử lý các phép tính: dùng hàm eval hỗ trợ trong ngôn ngữ php.</p>

<h1>Các bước cài đặt và công cụ hỗ trợ</h1>

- Bước 1: Clone Responsity này về máy của bạn.

-	Bước 2: Nếu bạn dùng Xampp cho máy.

![alt text](hinh/dungxam.png)

<p>Copy folder vừa clone về lưu vào thư mục mới trong htdocs của Xampp</p>

![alt text](hinh/clone.png)

-	Bước 3: Mở Xampp.

![alt text](hinh/moxampp.png)

-	Bước 4: Vào google của bạn nhập locallhost:8080/tm.php
(-- Trong đó:	8080 là PORT trong Xampp của bạn hiện mở.
-- tm.php : tên file lưu chương trình của bạn.)
<p>	Nếu bạn muốn làm việc với code:</p>
- Hãy inport mysql có tên Calculator.sql vào phần cơ sở dữ liệu của bạn và làm việc.

<h1>Nội dung bài toán</h1>

<h3>Đã hoàn thành</h3>
<p>- Chương trình đã hoàn thành phần thiết kế giao diện.</p>

![alt text](hinh/giaodien.png)

<p>- Giải quyết được một số chức năng cơ bản như: </p>
- Các phép tính cộng, trừ, nhân, chia.

- Các phép mũ, căn bậc 2, số pi, số e.

- Các hàm lượng giác sin, cos, tan.

- Lưu kết quả gần nhất.

- Xóa 1 số hay Xóa toàn màn hình (trả về 0).

<h1>Hướng phát triển cho bài toán</h1>
<p>••	Xử lý ngoại lệ tất cả các trường hợp còn thiếu.</p>
<p>••	Cấu trúc lại toàn bộ code cho đồng bộ và thống nhất.</p>
<p>••	Xây dựng thêm các chức năng khác nâng cao như tính phân số, số phức, kiểm tra số nguyên tố,…</p>
<p>••	Thiết kế chức năng lưu kết quả trong 5 đến 10 lần gần nhất.</p>
<p>••	Thêm các chức năng giải phương trình các bậc 2,3; logic và cơ số mũ logic; giải ma trận mxn.</p>
<p>••	Cho phép nhập các số nhị phân và tính toán.</p>
<p>••	Chức năng đổi nhiệt độ (C sang F và ngược lại).</p>

