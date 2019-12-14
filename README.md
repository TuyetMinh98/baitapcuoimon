
1.Mô tả bài toán
	Xây dựng ứng dụng máy tính bỏ túi CALCULATOR.
	- Tính toán kết quả của các phép tính yêu cầu của người dùng từ cơ bản đến nâng cao. 
	Hệ thống mới gồm các chức năng sau:
	+ Nhập: Cho phép nhập các số trên bàn phím, các phép toán số học, các phương trình, các phép toán logic...
	+ Xử lý: 
	• Các phép tính cơ bản như cộng (+), trừ (-), nhân (*), chia (/).
	• Các phép tính nâng cao như: sin, cos, tan, mũ, giai thừa,..
	• Các phép tính khó như: giải phương trình bậc 2, bậc 3; logic cho hàm mũ,...
	• Đổi về số nhị phân để tính toán.
	• Chạy giải ma trận 2,3,4.
	+ Hiển thị: Sau khi xử lý xong phép toán thì sẽ hiện kết quả của phép tính mà nó vừa xử lý xong lên màn hình 
	ngay dòng kết quả. Hiển thị kết quả số nhị phân nếu sử dụng chức năng tính bằng số nhị phân.
	+ Lưu các kết quả gần nhất để tiện cho người sử dụng.
	- Áp dụng cho các đa đối tượng từ các bạn học sinh sinh viên, đến các ngành nghê khác như: giáo viên, kinh doanh,...
	- Sự dụng cho các đối tượng cụ thể thuộc các môi trường cụ thể như trường học, môi trường doanh nghiệp,...

2 Mục đích xây dựng hệ thống mới
	Chiếc máy tính bỏ túi là dụng cụ học tập quen thuộc đối với nhiều thế hệ học sinh - sinh viên. Ngoài một công cụ hỗ trợ đắc lực trong việc học tập và thi cử, máy tính còn được sử dụng rộng rãi trong các lĩnh vực khác như kinh doanh, tài chính và trong nhiều lĩnh vực chuyên môn khác. Một thiết bị đơn giản có thể thay thế bạn tính toán những phép tính đơn giản mà không cần dùng phương pháp truyền thống là viết ra giấy hay tính nhẩm. Máy tính giúp con người thực hiện được các phép tính chính xác và nhanh chóng hơn.
	- Đầu vào/ đầu ra của bài toán
	+ Input: 
	• Các toán hạng từ 0 đến 9
	• Dấu phẩy thập phân.
	• Các toán tử cộng, trừ, nhân, chia.
	• Các toán tử sin, cos, căn bậc 2, bình phương.
	• Số nguyên a, b, c (cho chức năng giải phương trình).
	• Tác động Xóa.	
	+ Output:
	• Các toán hạng, số thập phân được nhập.
	• Kết quả các phép tính.
	• Nghiệm của phương trình.
	• Xóa màn hình máy tính hiện có (trả về 0).
	- Hướng giải quyết bài toán.
	+ Thuật toán xử lý nhập các toán tử và toán hạng: Dùng phương thức POST để lấy các toán tử, toán hạng từ các Button ứng với nó.
	+ Thuật toán xử lý các phép tính: dùng hàm eval hỗ trợ các phép tính trong ngôn ngữ php.

3 Các bước cài đặt và một số công cụ hỗ trợ.
	B1: Cài Xampp
	B2: Trong file Xampp có thư mục htdocs.
	-	Trên Github tải 2 file có tên: tm.php và kha.css.
	-	Tải về lưu ngay trong thư mục htdocs của Xampp.
	B3: Cài đặt Sublime Text3 để thực hiện code.
	B4: Mở Xampp
	B5: Sử dụng 2 file đã được download về trong htdocs mở bằng Sublime Text3.
	-	File tm.php : fie chương trình máy tính bỏ túi bằng code PHP.
	-	File kha.css : file điều chỉnh giao diện máy tính.
	B6: Vào google của bạn nhập locallhost:8080/tm.php
		Trong đó:8080 là PORT trong Xampp của bạn hiện mở.
			 tm.php : tên file lưu chương trình của bạn.
	B7: Sử dụng và phát triển lên cao hơn nếu bạn có thể.
4 Nội dung của bài toán
	- Chương trình đã hoàn thành phần thiết kế giao diện.
	- Giải quyết được một số chức năng cơ bản như: 
		+ Các phép tính cộng, trừ, nhân, chia.
		+ Các phép mũ, căn bậc 2, số pi, số e.
		+ Các hàm lượng giác sin, cos, tan.
		+ Lưu kết quả gần nhất.
		+ Xóa 1 số hay Xóa toàn màn hình (trả về 0).
5 Hướng phát triển để hoàn thiện
	- Xử lý ngoại lệ tất cả các trường hợp còn thiếu
	- Cấu trúc lại toàn bộ code cho đồng bộ và thống nhất
	- Xây dựng thêm các chức năng khác nâng cao như tính phân số, số phức, kiểm tra số nguyên tố,…
	- Thiết kế chức năng lưu kết quả trong 5 đến 10 lần gần nhất.
	- Thêm các chức năng giải phương trình các bậc 2,3; logic và cơ số mũ logic; giải ma trận mxn.
	- Cho phép nhập các số nhị phân và tính toán.
	- Chức năng đổi nhiệt độ (C sang F và ngược lại).



Thắc mắc vui lòng gửi gmail: tuyetminh18101998@gmail.com



