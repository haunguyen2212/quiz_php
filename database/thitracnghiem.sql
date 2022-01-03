-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 05:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thitracnghiem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bomon`
--

CREATE TABLE `bomon` (
  `MaBoMon` char(5) NOT NULL,
  `TenBoMon` varchar(50) DEFAULT NULL,
  `MaKhoa` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bomon`
--

INSERT INTO `bomon` (`MaBoMon`, `TenBoMon`, `MaKhoa`) VALUES
('DI-01', 'Công Nghệ Thông Tin', 'DI'),
('DI-02', 'Hệ Thống Thông Tin', 'DI'),
('DI-03', 'Khoa Học Máy Tính', 'DI'),
('DI-04', 'Công Nghệ Phần Mềm', 'DI'),
('DI-05', 'Mạng Máy Tính Và Truyền Thông', 'DI'),
('MT-03', 'Tư Tưởng Hồ Chí Minh', 'MT');

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `MaCH` int(11) NOT NULL,
  `MaMon` char(5) DEFAULT NULL,
  `NoiDung` varchar(1000) DEFAULT NULL,
  `OptionA` varchar(500) DEFAULT NULL,
  `OptionB` varchar(500) DEFAULT NULL,
  `OptionC` varchar(500) DEFAULT NULL,
  `OptionD` varchar(500) DEFAULT NULL,
  `DapAn` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`MaCH`, `MaMon`, `NoiDung`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `DapAn`) VALUES
(1, 'DI001', 'Các tài nguyên nào có thể dùng chung được nhờ mạng máy tính?', 'Chương trình, dữ liệu', 'Ổ đĩa CD ROM', 'Máy in, máy scanner', 'Cả 3 đáp án trên đều đúng', 'D'),
(2, 'DI001', 'Thuật ngữ viết tắt của mạng cục bộ là gì?', 'LAN', 'MAN', 'WAN', 'GAN', 'A'),
(3, 'DI001', 'Thuật ngữ viết tắt của mạng diện rộng là gì?', 'LAN', 'MAN', 'WAN', 'GAN', 'C'),
(5, 'DI001', 'Hai máy tính có thể kết nối trực tiếp với nhau để trao đổi thông tin, mạng kết nối 2 máy tính đó thuộc loại mạng nào?', 'Mạng LAN', 'Mạng MAN', 'Mạng WAN', 'Mạng Internet', 'A'),
(6, 'DI001', 'Tại sao vấn đề an ninh mạng máy tính lại được quan tâm và phát triển hiện nay?', 'Do yêu cầu đảm bảo an ninh tài nguyên mạng của người dùng', 'Do sự phát triển nhanh của các cuộc xâm nhập tài nguyên mạng bất hợp pháp', 'Do khối lượng tài nguyên của mạng máy tính càng tăng và có giá trị cao', 'Cả 3 câu trên đều đúng', 'D'),
(7, 'DI001', 'Ứng dụng nào sau đây không hỗ trợ chức năng truyền thông mạng?', 'Paint', 'Telnet', 'Semantic Antivirus', 'Yahoo Messenger', 'A'),
(8, 'DI001', 'Tầng nào trong mô hình OSI thực hiện gửi tín hiệu lên cáp?', 'Physical', 'Network', 'Data Link', 'Transport', 'A'),
(9, 'DI001', 'Mô hình OSI được chia ra làm mấy tầng?', '4 tầng', '5 tầng', '6 tầng', '7 tầng', 'D'),
(10, 'DI001', 'Mô hình OSI là 1 bộ định chuẩn của tổ chức nào?', 'IEEE', 'ANSI', 'ISO', 'WLAN', 'C'),
(11, 'DI001', 'Mô hình OSI được nghiên cứu bắt đầu từ năm nào?', '1969', '1970', '1971', '1972', 'C'),
(12, 'DI001', 'Điều gì xảy ra nếu không có mô hình OSI?', 'Người ta không thể thiết kế và xây dựng được các giao thức mạng', 'Người ta không thể thiết kế và xây dựng được các ứng dụng trên mạng', 'Người ta vẫn có thể xây dựng được các giao thức mạng, nhưng tính hiệu quả và đồng bộ thấp, gây khó khăn cho việc xây dựng và phát triển', 'Người ta không thể xây dựng được bộ giao thức TCP/IP', 'C'),
(13, 'DI001', 'Thứ tự các tầng sắp xếp từ thấp đến cao trong mô hình OSI là:', 'Vật lý, liên kết dữ liệu, mạng, giao vận, phiên, trình diễn, ứng dụng', 'Vật lý, liên kết dữ liệu, mạng, trình diễn, giao vận, phiên, ứng dụng', 'Vật lý, liên kết dữ liệu, mạng, phiên, trình diễn, giao vận, ứng dụng', 'Vật lý, liên kết dữ liệu, mạng, giao vận, trình diễn, phiên, ứng dụng', 'A'),
(14, 'DI001', 'Chức năng xác lập địa chỉ cổng dịch vụ cho các gói truyền dữ liệu truyền thông được thực hiện bởi tầng chức năng nào?', 'Application', 'Network', 'Session', 'Tranport', 'D'),
(15, 'DI001', 'Chức năng xác lập cơ chế truy nhập đường truyền được thực hiện ở tầng chức năng nào', 'Data Link', 'Network', 'Physical', 'Tranport', 'B'),
(16, 'DI001', 'Định nghĩa địa chỉ IP được thực hiện tại tầng nào trong các tầng sau?', 'Liên kết dữ liệu', 'Mạng', 'Giao vận', 'Vật lý', 'B'),
(17, 'DI001', 'Việc định nghĩa địa chỉ IP tại tầng mạng có ý nghĩa gì?', 'Để định danh 1 máy tính trên mạng và cho phép các máy tính trong liên mạng có thể trao đổi thông tin với nhau', 'Không có ý nghĩa gì cả', 'Để các máy tính trong 1 mạng có thể trao đổi thông tin với nhau', 'Nhằm đảm bảo an ninh mạng máy tính', 'A'),
(18, 'DI001', 'Việc định nghĩa địa chỉ MAC ở tầng liên kết dữ liệu có ý nghĩa gì?', 'Để định danh 1 máy tính trên mạng và cho phép các máy tính trong 1 mạng có thể trao đổi thông tin với nhau', 'Để định danh 1 thiết bị trên mạng và cho phép các máy tính trong 1 mạng có thể trao đổi thông tin với nhau', 'Để định danh 1 máy tính trên mạng', 'Nhằm nâng cao độ tin cậy trong truyền tin', 'B'),
(19, 'DI001', 'Gói tin tại tầng liên kết dữ liệu có tên gọi là gì?', 'Datagram', 'Dlink', 'Frame', 'Ethernet', 'C'),
(20, 'DI001', 'Khái niệm sau đây nói đến mô hình mạng nào: Tất cả các máy tính đều bình đẳng với nhau, mỗi máy tính có thể vừa cung cấp trực tiếp tài nguyên, vừa có thể sử dụng tài nguyên của máy tính khác.', 'Mô hình mạng ngang hàng', 'Mô hình mạng khách chủ', 'Mô hình mạng Client/Server', 'Cả B và đều đúng', 'A'),
(21, 'DI001', 'Một mạng con lớp C mượn 5 bit để chia Subnet thì SubnetMask sẽ là:', '255.255.255.1', '255.255.255.128', '255.255.224.0', '255.255.255.248', 'D'),
(22, 'DI001', 'Địa chỉ nào là địa chỉ broadcast của lớp 2 ?', '255.255.255.255', 'FFFF.FFFF.FFFF', 'AAAA.AAAA.AAAA', '111.111.111.111', 'B'),
(23, 'DI001', 'Subnetmask trong một cổng seria của router là 11111000. Số thập phân của nó là:', '210', '224', '248', '255', 'C'),
(24, 'DI001', 'Biễu diễn số 125 từ cơ số decimal sang cơ số binary.', '01111101', '01101111', '01111110', '01011111', 'A'),
(25, 'DI001', ' Lệnh PING dùng để:', 'Kiểm tra các máy tính có đĩa cứng hay không', 'Kiểm tra các máy tính có hoạt động tốt hay không', 'Kiểm tra các máy tính trong mạng có liên thông không', 'Kiểm tra các máy tính có truy cập vào Internet không', 'C'),
(26, 'DI001', 'Trong các mô hình sau, mô hình nào là mô hình mạng được dùng phổ biến hiện nay:', 'Peer - to - Peer', 'RemoteAccess', 'Terminal - Mainframe', 'Client - Server', 'D'),
(27, 'DI001', ' Dịch vụ nào cho phép tham chiếu host bằng tên thay cho việc dùng địa chỉ IP khi duyệt Internet?', 'POTS', 'DNS', 'HTTP', 'FTP', 'B'),
(28, 'DI001', 'Mỗi tầng chức năng trong mỗi hệ thống theo mô hình OSI trao đổi thông tin như thế nào với các tầng còn lại?', 'Có thể trao đổi thông tin trực tiếp với các tầng chức năng còn lại', 'Không thể trao đổi thông tin trực tiếp với các tầng chức năng còn lại', 'Chỉ trao đổi thông tin trực tiếp với tầng chức năng nằm liền kề nó', 'Cả ba câu trên đều sai', 'C'),
(29, 'DI001', 'Hệ điều hành Windows2000 tích hợp các ứng dụng mạng nào sau đây?', 'Telnet', ' IIS (Internet Information Service)', 'Messenger', 'Cả ba ứng dụng trên', 'D'),
(30, 'DI001', 'Sau khi đã khỏa sát và thiết kế một mạng máy tính, bước tiếp theo để thiết lập một mạng máy tính, người ta cần phải thực hiện các công việc gì?', 'Xây dựng và lắp đặt các thiết bị truyền thông', 'Xây dựng và lắp đặt các cáp truyền thông hoặc là lắp đặt các thiết bị hỗ trợ truyền thông vô tuyến', 'Cài đặt và cấu hình các phần mềm giao thức mạng', 'Tất cả các công việc trên', 'D'),
(31, 'DI001', 'Mục đích chính của việc xây dựng GAN là gì?', 'Kết nối các máy tính trong phạm vi toàn cầu', 'Kết nối các máy tính trong phạm hẹp như một toà nhà, trường học,…', 'Kết nối các máy tính trong phạm vi một thành phố hay một trung tâm kinh tế', 'Kết nối các máy tính trong phạm vi một quốc gia hoặc trong một châu lục', 'A'),
(32, 'DI001', 'Các kiểu mạng LAN, MAN, WAN, GAN được phân biệt với nhau bởi tiêu chí phân loại nào?', 'Khoảng cách địa lý', 'Giao thức truyền thông', 'Thiết bị mạng', 'Đường truyền mạng', 'A'),
(33, 'DI001', 'Gói tin tại tầng mạng trong bộ giao thức TCP/IP có tên gọi là gì?', 'Datagram', 'Dlink', 'Frame', 'Ethernet', 'A'),
(34, 'DI001', 'Giao thức là gì?', 'Mô hình nhằm để thiết lập các ứng dụng trao đổi thông tin', 'Các quy định để truyền thông tin của một thực thể mạng', 'Một tập các quy tắc và thủ tục mà các thực thể mạng trao đổi thông tin với nhau phải tuân thủ', 'Cả ba câu trên đều sai', 'C'),
(35, 'DI001', 'Các gói dữ liệu truyền thông giữa hai trạm theo mô hình OSI được truyền thông theo phương thức chuyển mạng gì?', 'Mạng quảng bá', 'Mạng chuyển mạch', 'Mạng chuyển gói', 'Tất cả đều sai', 'C'),
(36, 'DI001', 'Phát biểu nào dưới đây là sai khi nói về các thành phần của mạng máy tính', 'Các thiết bị đầu cuối như máy tính, máy in, điện thoại di đông,… kết nối với nhau để tạo thành mạng', 'Phương tiện truyền thông để chuyển đổi tín hiệu và truyền thông tin đi', 'Các thiết bị kết nối mạng như vỉ mạng (NIC), Switch, Router,… Các thiết bị này kết hợp với phương tiện truyền thông để kết nối các thiết bị đầu cuối với nhau', 'Giao thức truyền thông qui định cách trao đổi thông tin giữa các thiết bị gởi và nhận trong mạng', 'B'),
(37, 'DI001', 'Khi dữ liệu được chuyển từ tầng trên xuống tầng dưới kề nó, gói dữ liệu được bổ sung thêm thông tin điều khiển trong phần', 'Địa chỉ', 'Option', 'Vùng kiểm soát lỗi', 'Header', 'D'),
(38, 'DI001', 'Điều khiển các cuộc liên lạc là chức năng của tầng nào?', 'Presentation', 'Transport', 'Session', 'Data Link', 'C'),
(39, 'DI001', 'Tầng nào trong mô hình OSI chuyển luồng bit thành Frame?', 'Session', 'Presentation', 'Data Link', 'Network', 'C'),
(40, 'DI001', 'Trong mô hình OSI, tầng 3 là tầng:', 'Transport', 'Internet', 'Session', 'Network', 'D'),
(41, 'DI001', 'Mạng nào có các máy vừa làm máy khách vừa làm máy phục vụ?', 'Peer to Peer', 'Client / Server', 'Ethernet', 'LAN', 'A'),
(42, 'DI002', 'Phần quan trọng của hệ điều hành Linux là:', 'File System', 'Services', 'Kernel', 'Shell', 'C'),
(43, 'DI002', 'Để liệt kê các file có trong thư mục hiện hành ta dùng lệnh:', 'Lệnh ls', 'Lệnh df', 'Lệnh du', 'Lệnh cp', 'A'),
(44, 'DI002', 'Để liệt kê đầy đủ thông tin của các file có trong thư mục hiện hành ta dùng lệnh ls với tham số:', '-a', '-l', '-x', '-n', 'B'),
(45, 'DI002', 'Để chép 1 file /tmp/hello.txt và thư mục tmp/hello/ ta phải làm lệnh nào sao đây', 'copy /tmp/hello.txt tmp/hello/', 'cp tmp/hello.txt /tmp/hello', 'cp /tmp/hello /tmp/hello', 'cp /tmp/hello.txt /tmp/hello', 'D'),
(46, 'DI002', 'Tập tin sau đây có thuộc tính như thế nào: -rwx--x--x hello.sh', '722', '027', '711', '744', 'C'),
(47, 'DI002', 'Để thiết lập thuộc tính cho một tập tin hello.sh với các yêu cầu sau: Chủ sở hữu được quyền đọc ghi, nhóm được đọc, thực thi, người dùng khác chỉ đọc thì ta thực hiện lệnh nào sau đây:', 'chmod 655', 'chmod 654', 'chmod 651', 'chmod 541', 'B'),
(48, 'DI002', 'Tập tin /etc/passwd chứa thông tin gì của users hệ thống', 'Chứa profile của người dùng', 'Chứa UID, GID, hame directory, shell', 'Chứa password của người dùng', 'Chứa tập shadow của người dùng', 'B'),
(49, 'DI002', 'Tập tin /etc/shadow chứa thông tin gì của users hệ thống', 'Chứa profile của người dùng', 'Chứa UID, GID, hame directory, shell', 'Chứa password của người dùng', 'Chứa login name', 'C'),
(50, 'DI002', 'Dịch vụ www chạy ở port nào?', '53', '80', '110', '443', 'B'),
(51, 'DI002', 'Dịch vụ SMTP chạy ở port nào?', '22', '23', '24', '25', 'D'),
(52, 'DI002', 'Dịch vụ SSH trong Linux là gì?', 'Secure Socket Shell', 'Sercure Shell', 'Samba Shell', 'Không là dịch vụ gì cả', 'B'),
(53, 'DI002', 'Để thay đổi tên đăng nhập của tài khoản \"user\" thành \"newuser\" ta dùng lệnh?', 'userchange -name newuser user', 'usermod -l newuser user', 'usermod -m newuser user', 'passwd -n newuser user', 'B'),
(54, 'DI002', 'Trong Red Hat Linux, tên tài khoản người dùng:', 'Là duy nhất', 'Phân biệt chữ thường với chữ hoa', 'Không được bắt đầu bằng ký số', 'Cả 3 đều đúng', 'D'),
(55, 'DI002', 'Tập tin /etc/sysconfig/network có chứa thông tin về:', 'Tên máy tính và default gateway', 'Các thiết bị sử dụng để kết nối mạng', 'Các script dủng trong kết nối PPP và SLIP', 'Trạng thái của mạng', 'A'),
(56, 'DI002', 'Để xem thông tin về phần chia đĩa cứng trên hệ thống ta dùng lệnh:', 'fdisk /dev/had', 'fdisk /dev/sc', 'fdisk -l', 'list /dev/had', 'C'),
(57, 'DI002', 'Để tạo thêm một địa chỉ IP 192.168.10.5/24 cho gia tiếp mạng eth0, ta dùng lệnh:', 'alias eth0 192.168.10.5 up', 'ifconfig eth1:0 192.168.10.5 netmask 255.255.255.0 up', 'ifconfig eth0:0 192.168.10.5', 'if-cfg eth0:0 192.168.10.5', 'C'),
(58, 'DI002', 'Mở file /etc/passwd ta thấy có các dòng .Trật tự nào sau đây của các trường là đúng:', 'username, UID, GID, home directory, command, comment', 'username, UID, GID, comment, home directory, command', 'UID, username, GID, home directory, comment, command', 'username, UID, group name, GID, home directory, comment', 'B'),
(59, 'DI002', 'Bạn dùng lệnh userdel Dung để xoá user Dung. Mẩu tin của user này trong file etc/passwd bị xoá, tuy vậy trong home directory có thể vẫn còn thư mục của user này. Bạn có thể dùng lệnh nào sau đây để khẳng định home directory cũng đã bị xóa?', 'userdel –m Dung', 'userdel –u Dung', 'userdel –r Dung', 'userdel –l Dung', 'C'),
(60, 'DI002', 'Dung lượng nhỏ nhất cho phép đối với các swap partition là :', '16 MB', '32MB', '64MB', '128MB', 'A'),
(61, 'DI002', '__________ là máy chủ Mail giữ vai trò trung gian để chuyển mail giữa các vị trí không kết nối trực tiếp được với nhau, nó phân giải địa chỉ người nhận để chuyển giữa các mail server hoặc chuyển đến mail gateway.', 'Mailbox', 'Mail Host', 'Mail Client', 'Mail POP', 'D'),
(62, 'DI002', '___________ là loại resource record cho phép chỉ định máy chủ quản lý mail cho miền.', 'SOA', 'XM', 'MX', 'PTR', 'C'),
(63, 'DI002', 'Để xem trạng thái các port đang mở của một máy Linux ta sử dụng lệnh nào trong các lệnh sau đây:', 'ipconfig', 'ifconfig', 'netstat', 'route', 'C'),
(64, 'DI002', 'Để thay đổi các lựa chọn gắn kết (mount) tự động cho một hệ thống tập tin cục bộ, ta cần sửa đổi nội dung tập tin nào?', '/etc/filesystems', '/etc/fstab', '/etc/group', '/etc/mnttab', 'B'),
(65, 'DI002', 'Trong dịch vụ httpd (Apache), để xây dựng \"máy Web ảo\", ta cần chỉ khối dẫn nào?', 'Directory', 'VirtualMachine', 'VirtualHost', 'Tất cả đều sai', 'C'),
(66, 'DI002', 'Kiến trúc Kernel Linux là: ', 'Static', 'Microkernel', 'Distributed', 'Monolithic', 'D'),
(67, 'DI002', 'Tác giả của phiên bản hệ điều hành Linux đầu tiên là:', 'Bill Gates', 'Linus Tolvards', 'Alan Turing', 'Pascal', 'B'),
(68, 'DI002', 'Điều nào sau đây không thể được thực hiện với lệnh cat?', 'Tạo một tập tin mới', 'Hiển thị các nội dung cùa một tập tin', 'Thay đổi nội dung của một tập tin', 'Gắn thêm thông tin cho các tập tin khác', 'C'),
(69, 'DI002', 'Run level nào shutdown và halt hệ thống', 'Level 0', 'Level 1', 'Level 2', 'Level 3', 'A'),
(70, 'DI002', 'Lệnh nào sau đây dùng để chuyển sang người dùng khác?', 'man', 'su', 'hostName', 'lilo', 'B'),
(71, 'DI002', 'Mỗi thiết bị trong Linux là một tập tin lưu trữ trong thư mục __________.', '/etc', '/mnt', '/home', '/dev', 'D'),
(72, 'MT001', 'Tư tưởng Hồ Chí Minh thuộc hệ tư tưởng nào?', 'Hệ tư tưởng phong kiến', 'Hệ tư tưởng tư sản', 'Hệ tư tưởng Mác- Lênin', 'Là sự pha trộn 3 hệ tư tưởng trên', 'C'),
(73, 'MT001', 'Đối tượng nghiên cứu của bộ môn Tư tưởng Hồ Chí Minh là gì?', 'Quá trình sản sinh tư tưởng', 'Quá trình hiện thực hóa tư tưởng', 'Quá trình sản sinh và hiện thực hóa tư tưởng', 'Quá trình Đảng cộng sản Việt Nam vận dụng tư tưởng Hồ Chí Minh vào thực tiễn cách mạng nước ta', 'C'),
(74, 'MT001', 'Trong các tiền đề tư tưởng – lý luận hình thành tư tưởng Hồ Chí Minh, tiền đề nào TRỰC TIẾP quyết định bản chất tư tưởng Hồ Chí Minh?', 'Tinh hoa văn hóa dân tộc', 'Tinh hoa văn hóa nhân loại', 'Chủ nghĩa Mác – Lênin', 'Cả 3 đáp án trên đều đúng', 'D'),
(75, 'MT001', 'Cách thức Hồ Chí Minh tiếp thu tinh hoa văn hóa nhân lọai – kể cả chủ nghĩa Mác – Lênin như thế nào?', '“Sao y bản chính”', 'Có chọn lọc, phê phán, kế thừa và phát triển', 'Loại bỏ hết các tư tưởng phong kiến, tư sản', 'Loại bỏ hết các tư tưởng tôn giáo', 'B'),
(76, 'MT001', 'Tìm một câu có sự nhầm lẫn trong những câu sau đây. Trong 10 năm đầu ( 1911 – 1920) của quá trình tìm đường cứu nước, Nguyễn Ái Quốc đã:', 'Đến nước Pháp, nơi đã sản sinh ra tư tưởng tự do, bình đẳng, bác ái', 'Đến nhiều nước ở châu Phi, châu Mỹ, châu Âu', 'Tham gia Đảng xã hội Pháp', 'Hoạt động ở Trung Quốc và Thái Lan', 'B'),
(77, 'MT001', '“ Đưa hổ cửa trước, rước beo cửa sau”; “ ỷ pháp cầu tiến bộ” là nhận xét của Nguyễn Ái Quốc về chủ trương cứu nước sai lầm của ai?', 'Hoàng Hoa Thám', 'Phan Đình Phùng', 'Phan Bội Châu, Phan Chu Trinh', 'Phái chủ hòa trong triều đình nhà Nguyễn', 'C'),
(78, 'MT001', 'Trong quá trình hình thành tư tưởng Hồ Chí Minh, thời kỳ trước năm 1911 được gọi là gì?', 'Thời kỳ học tập kiến thức văn hóa', 'Thời kỳ hình thành nhân cách', 'Thời kỳ tuổi trẻ sống vô tư', 'Thời kỳ hình thành lòng yêu nước và chí hướng cứu nước', 'D'),
(79, 'MT001', 'Dưới đây tóm tắt một số luận điểm của Hồ Chí Minh về mối quan hệ dân tộc và giai cấp. Hỏi: luận điểm nào chứng tỏ từ rất sớm Hồ Chí Minh đã có quan điểm hội nhập kinh tế quốc tế?', 'Chủ nghĩa dân tộc là một động lực lớn của đất nước', 'Chúng tôi không chủ trương giai cấp tranh đấu vì một lẽ tầng lớp tư sản Việt Nam đã bị kinh tế thực dân đè nén không cất đầu lên được', '“ Trái lại chúng tôi chủ trương làm cho tư bản Việt Nam phát triển. Mà chỉ có thống nhất và độc lập thì tư bản Việt Nam mới có thể phát triển”', 'Đồng thời chúng tôi rất hoan nghênh tư bản Pháp và tư bản các nước khác thật thà cộng tác với chúng tôi. Một là để xây dựng lại Việt Nam sau lúc bị chiến tranh tàn phá, hai là để điều hòa kinh tế thế giới và giữ gìn hòa bình', 'D'),
(80, 'MT001', 'Hãy xác định câu trích nào dưới đây thể hiện tư tưởng Hồ Chí Minh về xây dựng kinh tế, đồng thời là xây dựng văn hóa?', 'Bồi dưỡng thế hệ cách mạng cho đời sau là một việc rất quan trọng và rất cần thiết. Đảng phải chăm lo giáo dục đạo đức cách mạng cho họ, đào tạo họ thành những người thừa kế xây dựng chủ nghĩa xã hội “ vừa hồng vừa chuyên”', 'Đảng ta là một Đảng cầm quyền', 'Ngay sau khi cuộc kháng chiến chống Mỹ cứu nước của nhân dân ta hoàn tòan thăng lợi thì công việc đầu tiên là công việc đối với con người', 'Công việc xây dựng và khôi phục đất nước sau thắng Mỹ rất to lớn, nặng nề, phức tạp mà cũng rất vẻ vang. Đây là cuộc chiến đấu chống lại những gì đã cũ kỹ, hư hỏng, để tạo ra những cái mới mẻ, tươi tốt', 'A'),
(81, 'MT001', 'Trong” Thư gửi ủy ban nhân dân các kỳ, tỉnh,huyện và làng” năm 1945, Hồ Chí Minh đã nêu lên một số luận điểm quan trọng sau đây. Hỏi: luận điểm nào là tư tưởng quan trọng nhất về nhà nước kiểu mới?', 'Nếu không có nhân dân thì chính phủ không đủ lực lượng. Nếu không có chính phủ thì nhân dân không có ai dẫn đường', 'Chính phủ đã hứa với dân, sẽ gắng sức làm cho ai nấy đều có phần hạnh phúc', 'Các cơ quan của chính phủ từ toàn quốc cho đến các làng đều là công bộc của dân', 'Việc gì có lợi cho dân , ta phải hết sức làm. Việc gì có hại cho dân, ta phải hết sức tránh', 'B'),
(82, 'MT001', 'Tìm luận điểm đúng nhất trong nhận định dưới đây:” Tài sản có giá trị nhất trong hành trang của người thanh niên Nguyễn Tất Thành lúc ra đi tìm đường cứu nước năm 1911” là:', 'Một vốn học vấn chắc chắn cùng với năng lực trí tuệ sắc sảo của bản thân', 'Tinh thần nhân nghĩa, truyền thống đoàn kết của nhân dân', 'Truyền thống cần cù, lạc quan, yêu đời của con người Việt Nam', 'Chủ nghĩa yêu nước Việt Nam trong dựng nước và giữ nước', 'D'),
(83, 'MT001', 'Tóm tắt dưới đây ghi lại những quan niệm chủ yếu của Hồ Chí Minh, phân biệt đạo đức cũ và đạo đức mới. Hỏi: quan niệm nào là bao quát và quan trọng nhất về đạo đức mới?', 'Đạo đức cũ là đạo đức thủ cựu, nó vì danh vọng của cá nhân', 'Đạo đức mới là vĩ đại, nó vì sự nghiệp chung của dân tộc', 'Đạo đức là cái gốc của người cách mạng', 'Người có 4 đức: cần, kiệm, liêm, chính. Thiếu một đức thì không thành người', 'D'),
(84, 'MT001', 'Trong những câu Hồ Chí Minh giải thích chữ <i>Cần</i>, câu nào thể hiện quan niệm mới có tính khái quát của Người về vai trò của đạo đức thông qua chữ <i>Cần</i>?', 'Người siêng học tập thì mau biết', 'Người siêng làm thì nhất định thành công', 'Người siêng nghĩ ngợi thì hay có sáng kiến', 'Người siêng hoạt động thì có sức khỏe', 'C'),
(85, 'MT001', 'Trong bài thơ “ Nghe tiếng giã gạo” Hồ Chí Minh muốn nhấn mạnh điều gì?', 'Gạo đem vào giã bao đau đớn', 'Gạo giã xong rồi trắng tựa bông', 'Sống ở trên đời người cũng vậy', 'Gian nan rèn luyện mới thành công', 'D'),
(86, 'MT001', 'Trong những cơ sở hình thành tư tưởng Hồ Chí Minh, cơ sở nào quan trọng nhất?', 'Bối cảnh xã hội Việt Nam cuối thế kỷ XIX đầu thế kỷ XX và bối cảnh thời đại', 'Những tiền đề tư tưởng – lý luận', 'Nhân tố chủ quan', 'Bối cảnh xã hội Việt Nam cuối thế kỷ XIX đầu thế kỷ XX và bối cảnh thời đại, những tiền đề tư tưởng – lý luận', 'D'),
(87, 'MT001', 'Tư tưởng nào của cụ phó bảng Nguyễn Sinh Sắc – thân phụ Bác Hồ- đã ảnh hưởng sâu sắc đến nhân cách Hồ Chí Minh?', 'Tư tưởng yêu nước', 'Tinh thần hiếu học', 'Tư tưởng “ thân dân “', 'Nghị lực vượt qua khó khăn gian khổ để đạt được mục đích của cuộc sống', 'A'),
(88, 'MT001', 'Hãy chỉ ra một luận điểm sai so với quan điểm của Hồ Chí Minh trong các câu sau “ Hồ Chí Minh cho rằng để được giải phóng, mỗi dân tộc, mỗi giai cấp, mỗi con người phải đánh thắng các loại kẻ thù” sau đây:', 'Thực dân, đế quốc và bọn tay sai của chúng', 'Nghèo nàn, lạc hậu tức là giặc đói và giặc dốt', 'Chủ nghĩa cá nhân', 'Tất cả địa chủ, tư sản', 'D'),
(89, 'MT001', 'Hồ Chí Minh luôn tìm cách phân hóa triệt để kẻ thù làm cho cách mạng thêm bạn bớt thù.Trong những câu sau đây luận điểm nào là của Hồ Chí Minh đã nêu trong chánh cương vắn tắt?', 'Đã là địa chủ, tức là cừu địch của nông dân, thì phải đánh đổ và thâu hết ruộng đất của chúng', 'Chia địa chủ thành đại, trung và tiểu địa chủ là không rõ ràng và có chỗ không đúng', 'Đối với tiểu, trung địa chủ mà chủ trương lợi dụng họ là sai lầm và nguy hiểm', 'Chỉ có bọn đại địa chủ mới có thế lực và đứng hẳn về phe đế quốc', 'C'),
(90, 'MT001', 'Trong những luận điểm về xây dựng Đảng cộng sản của Hồ Chí Minh dưới đây, luận điểm nào được viết trong <i>Di chúc</i>?', 'Chủ nghĩa Mác – Lênin kết hợp với phong trào công nhân và phong trào yêu nước đã dẫn tới việc thành lập Đảng Cộng sản Đông Dương vào đầu năm 1930', 'Đảng ta là Đảng của giai cấp công nhân, đồng thời là Đảng của dân tộc, không thiên tư, thiên vị', 'Đảng muốn vững thì phải có chủ nghĩa làm cốt, trong Đảng ai cũng phải hiểu, ai cũng phải theo chủ nghĩa ấy', 'Phải giữ gìn Đảng ta thật trong sạch, phải xứng đáng là người lãnh đạo, là người đầy tớ thật trung thành của nhân dân', 'D'),
(91, 'MT001', 'Theo Hồ Chí Minh thì học chủ nghĩa Mác – Lênin như thế nào là đúng đắn nhất?. Hãy tìm đáp án sai trong những cách học dưới đây', 'Học thuộc lòng sách vở Mác – Lênin', 'Học lập trường, quan điểm và phương pháp của chủ nghĩa Mác – Lênin để giải quyết những vấn đề thực tế của nước ta', 'Học lý luận cốt để áp dụng vào thực tế', 'Học tập cái tinh thần xử trí mọi việc, đối với mọi người và đối với bản thân mình', 'A'),
(92, 'MT001', 'Khi trả lời câu hỏi:” dạy chủ nghĩa Mác – Lênin như thế nào là đúng?” Hồ Chí Minh đã nêu ý kiến như sau. Hãy tìm ý kiến nhấn mạnh yếu tố nhân văn trong việc giảng dạy chủ nghĩa Mác – Lênin của Hồ Chí Minh', 'Hiểu chủ nghĩa Mác – Lênin tức là cách mạng phân công cho việc gì đều phải làm tròn nhiệm vụ', 'Không nên đào tạo ra những con người thuộc sách làu làu, cụ Mác nói thế này, cụ Lênin nói thế kia, nhưng quét nhà lại để cho nhà đầy rác', 'Hiểu chủ nghĩa Mác – Lênin là phải sống với nhau có tình có nghĩa', 'Nếu thuộc bao nhiêu sách mà sống không có tình có nghĩa thì sao gọi là “hiểu chủ nghĩa Mác – Lênin được”', 'D'),
(93, 'MT001', 'Xác định câu nào dưới đây là của Đảng cộng sản Việt Nam vận dụng tư tưởng Hồ Chí Minh về kết hợp sức mạnh dân tộc với sức mạnh thời đại', 'Làm bạn với tất cả mọi nước dân chủ và không gây thù oán với một ai', 'Việt Nam sẵn sàng là bạn của các nước trong cộng đồng quốc tế, phấn đấu vì hòa bình, độc lập và phát triển', 'Cố nhiên sự giúp đỡ của các nước bạn là quan trọng nhưng không được ỷ lại', 'Một dân tộc không tự lực cánh sinh mà cứ ngồi chờ dân tộc khác giúp đỡ thì không xứng đáng được độc lập', 'B'),
(94, 'MT001', 'Luận điểm nào trong những luận điểm dưới đây về nhà nước của Hồ Chí Minh, trực tiếp thể hiện tư tưởng nhà nước của dân?', 'Nước ta là nước dân chủ', 'Cách mạng rồi thì quyền giao cho dân chúng số nhiều, chớ để trong tay một bọn ít người', 'Hễ chính phủ nào mà có hại cho dân chúng thì dân chúng phải đạp đổ chính phủ ấy đi và gây nên chính phủ khác', 'Việc gì có lởi cho dân, ta phải hết sức làm. Việc gì có hại cho dân, ta phải hết sức tránh', 'A'),
(95, 'MT001', 'Trong “ Thư gửi ủy ban nhân dân các kỳ, tỉnh, huyện và làng” năm 1945, Hồ Chí Minh đã nêu ra một số luận điểm quan trọng về nhà nước dân chủ mới.', 'Nếu không có nhân dân thì chính phủ không đủ lực lượng. Nếu không có chính phủ thì nhân dân không có ai dẫn đường', 'Nếu nước độc lập mà dân không được hưởng hạnh phúc, tự do thì độc lập cũng chẳng có nghĩa lý gì', 'Các cơ quan của chính phủ từ toàn quốc cho đến các làng đều là công bộc của dân', 'Việc gì có lợi cho dân , ta phải hết sức làm. Việc gì có hại cho dân, ta phải hết sức tránh', 'A'),
(96, 'MT001', 'Luận điểm nào dưới đây thể hiện tình cảm nhân văn Hồ Chí Minh?', 'Người có 4 đức: cần, kiệm, liêm, chính. Thiếu một đức thì không thành người', 'Người siêng năng thì mau tiến bộ . Cả nước siêng năng thì nước mạnh giàu', 'Đối với mọi người thái độ phải chân thành, khiêm tốn, phải thật thà đoàn kết. Phải học người và giúp người tiến tới', 'Mỗi người, mỗi gia đình đều có một nỗi đau khổ riêng, gộp cả những nỗi đau khổ riêng của mỗi người, mỗi gia đình lại thì thành nỗi đau khổ của tôi', 'D'),
(97, 'MT001', 'Câu nào trong bức thư “sẻ cơm nhường áo” viết tháng 9/1945, nói lên tình cảm nhân văn của Hồ Chí Minh được thể hiện bằng hành động?', 'Từ tháng giêng đến tháng bảy năm nay, ở Bắc bộ ta có 2 triệu người chết đói', 'Kế đó lại bị lụt, nạn đói càng tăng thêm, nhân dân càng đói khổ', 'Lúc chúng ta nâng bát cơm ăn, nghĩ đến kẻ đói khổ, chúng ta không khỏi động lòng', 'Vậy, tôi xin đề nghị với đông bào cả nước và tôi xin thực hành trước, cứ 10 ngày nhịn ăn một bữa, mỗi tháng nhịn 3 bưa.Đem gạo đó ( mỗi bữa một bơ ) để cứu dân nghèo', 'D'),
(98, 'MT001', 'Để thực hiện chữ liêm, Năm 1949 Hồ Chí Minh đã nêu ra các biện pháp sau đây. Hỏi: trong tình hình hiện nay, biện pháp nào là đòi hỏi bức xúc nhất của nhân dân và nhà nước ta?', 'Tuyên truyền và kiểm soát', 'Giáo dục pháp luật từ trên xuống, từ dưới lên', 'Cán bộ phải thực hành chữ liêm trước để làm kiểu mẫu cho dân', 'Pháp luật phải thẳng tay trừng trị những kẻ bất liêm, bất kỳ kẻ ấy ở địa vị nào, làm nghề nghiệp gì', 'D'),
(99, 'MT001', 'Bàn về phương hướng xây dựng con người mới, Hồ Chí Minh đưa ra những chỉ dẫn quan trọng sau đây. Hỏi : chỉ dẫn nào nhấn mạnh yếu tố nhân văn trong giáo dục những người có thói hư, tật xấu', 'Mỗi con người đều có thiện và ác ở trong lòng', 'Ta phải làm cho phần tốt ở trong mỗi con người nảy nở như hoa mùa xuân và phần xấu bị mất dần đi', 'Đối với những người có thói hư tật xấu, trừ hạng người phản lại tổ quốc và nhân dân, ta cũng phải giúp họ tiến bộ bằng cách làm cho cái phần thiện trong con người nảy nở để đẩy lùi cái ác, chứ không phải đập cho tơi bời', 'Lấy gương người tốt việc tốt để giáo dục lẫn nhau là một trong những cách tốt nhất để xây dựng con người mới, cuộc sống mới', 'C'),
(100, 'MT001', 'Những câu sau đây tóm tắt một số luận điểm của Hồ Chí Minh về văn hóa. Hỏi: luận điểm nào được Hồ Chí Minh đưa ra lần đầu tiên trong mục đọc sách ở phần cuối của tập Nhật ký trong tù?', 'Văn hóa là đời sống tinh thần của xã hội, là thuộc về kiến trúc thượng tầng của xã hội', 'Phải xây dựng một nền văn hóa Việt Nam có tính chất dân tộc, khoa học và đại chúng', 'Văn hóa là tổng hợp của mọi phương thúc sinh hoạt cùng với biểu hiện của nó, mà loài người đã sản sinh ra nhằm thích ứng với nhu cầu đời sống và đòi hỏi của sự sinh tồn', 'Chúng ta phải biến một nước dốt nát, cực khổ thành một nước có nền văn hóa cao và đời sống tươi vui, hạnh phúc', 'D'),
(101, 'DI003', 'Bảo mật trong Datamining yêu cầu:', 'Dữ liệu không thể truy xuất cho công cộng', 'Dữ  liệu có thể truy xuất riêng phần', 'Dữ liệu phải được mã hóa', 'Dữ liệu có thể suy diễn', 'B'),
(102, 'DI003', 'Audit (kiểm tra, kiểm toán) dùng trong an toàn CSDL nhằm:', 'Xác thực đó là ai (authetication)?', 'Cấp quyền ai có thể làm gì (authorization)?', 'Ai đã làm gì?', 'Tất cả các mục', 'C'),
(103, 'DI003', 'Phòng chống tấn công Tấn công từ chối dịch vụ phân bố (DDOS)', 'Chỉ có thể dùng tường lửa', 'Có thể hạn chế bằng cách lập trình', 'Hiện nay đã có cách phòng chống hiệu quả', 'Cách hiệu quả duy nhất là lưu trữ và phục hồi (backup và restore)', 'B'),
(104, 'DI003', 'RSA là giải thuật', 'Mã công khai', 'Mã khóa riêng', 'Là tên của một tổ chức quốc tế về mã hóa', 'Tất cả đều sai', 'A'),
(105, 'DI003', 'Phát biểu nào là sai? Hàm hash:', 'Thường dùng với lý do là thời gian mã hóa', 'Kết quả phụ thuộc mẫu tin', 'Thường dùng để tạo chữ ký điện tử', 'Kích thước kết quả có độ dài phụ thuộc vào mẫu tin', 'D'),
(106, 'DI003', 'Trong giải thuật SHA 512, 80 từ:', 'Được tạo ra mặc định', 'Được tạo ra từ toàn bộ messenger', 'Được tạo ra từ một phần của messenger', 'Tất cả đều sai', 'B'),
(107, 'DI003', 'Một trong hai cách tiếp cận tấn công mã đối xứng', 'Tấn công tìm khóa', 'Tấn công tìm bản rõ', 'Tấn công duyệt toàn bộ', 'Tất cả đều sai', 'C'),
(108, 'DI003', 'Trong các thư mục tấn công RSA được lưu ý, không có :', 'Tấn công tính toán thời gian', 'Tấn công toán học', 'Tấn công bản rõ', 'Tấn công brute force', 'C'),
(109, 'DI003', 'Nên cài mức truy cập mặc định là mức nào sau đây?', 'Full access', 'No access', 'Read access', 'Write access', 'B'),
(110, 'DI003', 'Quyền truy cập nào cho phép ta lưu giữ một tập tin?', 'Đọc', 'Ghi', 'Sao chép', 'Hiệu chỉnh', 'B'),
(111, 'DI003', 'Quyền truy cập nào cho phép ta hiệu chỉnh thuộc tính của một tập tin?', 'Hiệu chỉnh (Modify)', 'Sao chép (Copy)', 'Thay đổi (Change)', 'Biên tập ( Edit)', 'A'),
(112, 'DI003', 'Chiều dài tối thiểu của mật khẩu cần phải là :', '12 đến 15 ký tự', '3 đến 5 ký tự', '8 ký tự', '1 đến 3 ký tự', 'C'),
(113, 'DI003', 'Các mật khẩu nào sau đây là khó phá nhất đối với một hacker?', 'password83', 'reception', '!$aLtNb83', 'LaT3r', 'C'),
(114, 'DI003', 'Các tập tin nào sau đây có khả năng chứa virus nhất?', 'database.dat', 'bigpic.jpeg', 'note.txt', 'picture.gif.exe', 'D'),
(115, 'DI003', 'Loại mã nguồn độc hại nào có thể được cài đặt song không gây tác hại cho đến khi một hoạt động nào đó được kích hoạt?', 'Sâu', 'Trojan horse', 'Logic bomb', 'Stealth virus', 'B'),
(116, 'DI003', 'Trong suốt quá trình kiểm định một bản ghi hệ thống máy chủ, các mục nào sau đây có thể được xem như là một khả năng đe dọa bảo mật?', 'Năm lần nổ lực login thất bại trên tài khoản \"jsmith\"', 'Hai lần login thành công với tài khoản Administrator', 'Năm trăm ngàn công việc in được gởi đến một máy in', 'Ba tập tin mới được lưu trong tài khoản thư mục bởi người sử dụng là \"finance\"', 'A'),
(117, 'DI003', 'Cách nào sau đây là tốt nhất để chống lại điểm yếu bảo mật trong phần mềm HĐH?', 'Cài đặt bản service pack mới nhất', 'Cài đặt lại HĐH thông dụng', 'Sao lưu hệ thống thường xuyên', 'Shut down hệ thống khi không sử dụng', 'A'),
(118, 'DI003', 'Khoá riêng có đặc điểm:', 'Thời gian thực hiện chậm', 'Không an toàn', 'Được thay thế bằng khoá công khai', 'Thời gian thực hiện nhanh', 'B'),
(119, 'DI003', 'Tính năng bảo mật nào có thể được sử dụng đối với một máy trạm quay sốtruy cập từ xa sử dụng một username và mật khẩu?', 'Mã hóa số điện thoại', 'Kiểm tra chuỗi modem', 'Hiển thị gọi', 'Gọi lại (Call back)', 'A'),
(120, 'DI003', 'Tiện ích nào sau đây là một phương thức bảo mật truy cập từ xa tốt hơn telnet?', 'SSL', 'SSH', 'IPSec', 'VPN', 'B'),
(121, 'DI003', 'Thiết bị nào được sử dụng để cho phép các máy trạm không dây truy cập vào một mạng LAN rộng?', '802.11b', 'Tường lửa', 'Điểm truy cập không dây (Wiless Access Point)', 'VPN', 'D'),
(122, 'DI003', 'Cơ cấu bảo mật mạng không dây nào sau đây là ít an toàn nhất ?', 'VPN', 'Mã hóa WEP 40 bit', 'Bảo mật định danh mạng', 'Mã hóa WEP 128 bit', 'C'),
(123, 'DI003', 'Thiết bị nào sử dụng bộ lọc gói và các quy tắc truy cập để kiểm soát truy cập đến các  mạng riêng từ các mạng công cộng, như là Internet?', 'Điểm truy cập không dây', 'Router', 'Tường lửa', 'Switch', 'C'),
(124, 'DI001', 'Chọn giao thức sử dụng cho mạng cáp quang học', 'CDDI', 'SONET', 'X25', 'FDDI', 'D'),
(125, 'DI001', 'Khẳng định nào không đúng đối với cáp quang học?', 'Không bị nhiễu', 'Không bị nghe trộm', 'Không bị suy hao tín hiệu', 'Chỉ truyền được tín hiệu quang', 'C'),
(126, 'DI001', 'Khẳng định nào đúng khi nói về ưu điểm của truyền số so với truyền analog?', 'Tốc độ truyền cao hơn', 'Giảm được lỗi do suy giảm và nhiễu trên đường truyền gây ra', 'Thiết bị dùng chung cho cả thoại, số liệu, hình ảnh, âm nhạc', 'Tất cả đều đúng', 'D'),
(127, 'DI003', 'Cơ cấu bảo mật nào sau đây được sử dụng với chuẩn không dây WAP ?', 'WTLS', 'SSL', 'HTTPS', 'Mã hóa WEP', 'A'),
(128, 'DI003', 'Phương pháp điều khiển truy cập có hiệu quả và an toàn nhất đối với mạng không dây là:', 'Mã hóa WEP 40 bit', 'Nhận dạng bảo mật mạng', 'Mã hóa WEP 128 bit', 'VPN', 'B'),
(129, 'DI003', 'Mức mã hóa WEP nào nên được thiết lập trên một mạng 802.11b ?', '128 bits', '40 bits', '28 bits', '16 bits', 'A'),
(142, 'DI003', 'Mục đích của một máy chủ RADIUS là :', 'Packet Sniffing', 'Mã hóa', 'Xác thực', 'Thỏa thuận tốc độ kết nối', 'C'),
(143, 'DI003', 'Các giao thức nào sau đây làm việc trên lớp IP để bảo vệ thông tin IP trên mạng ?', 'IPX', 'IPSec', 'SSH', 'TACACS+', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `MaGV` char(5) NOT NULL,
  `TenGV` varchar(50) NOT NULL,
  `Phai` varchar(5) DEFAULT NULL,
  `NgaySinhGV` date DEFAULT NULL,
  `MaBoMon` char(5) DEFAULT NULL,
  `GV_MatKhau` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giaovien`
--

INSERT INTO `giaovien` (`MaGV`, `TenGV`, `Phai`, `NgaySinhGV`, `MaBoMon`, `GV_MatKhau`) VALUES
('C0001', 'Phạm Hoàng Khiêm', 'Nam', '1978-12-04', 'DI-01', '8cb2237d0679ca88db6464eac60da96345513964'),
('C0002', 'Hồ Võ Hải Đăng', 'Nam', '1984-04-14', 'DI-01', '8cb2237d0679ca88db6464eac60da96345513964'),
('C0003', 'Nguyễn Thị Kiều Oanh', 'Nữ', '1981-02-02', 'DI-05', '8cb2237d0679ca88db6464eac60da96345513964'),
('C0004', 'Lê Quốc Huy', 'Nam', '1972-12-12', 'DI-01', '8cb2237d0679ca88db6464eac60da96345513964'),
('C0005', 'Hoàng Thùy Linh', 'Nữ', '1977-07-16', 'MT-03', '8cb2237d0679ca88db6464eac60da96345513964'),
('C0006', 'Nguyễn Võ Hồng Ngọc', 'Nữ', '1988-02-12', 'MT-03', '8cb2237d0679ca88db6464eac60da96345513964');

-- --------------------------------------------------------

--
-- Table structure for table `hocphan`
--

CREATE TABLE `hocphan` (
  `MaHP` char(7) NOT NULL,
  `TenHP` varchar(50) DEFAULT NULL,
  `MaMon` char(5) DEFAULT NULL,
  `MaGV` char(5) DEFAULT NULL,
  `TongSoCau` int(11) DEFAULT NULL,
  `TGLamBai` int(11) DEFAULT NULL,
  `HP_MatKhau` varchar(40) DEFAULT NULL,
  `TuyChinh` varchar(10) DEFAULT 'Off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hocphan`
--

INSERT INTO `hocphan` (`MaHP`, `TenHP`, `MaMon`, `MaGV`, `TongSoCau`, `TGLamBai`, `HP_MatKhau`, `TuyChinh`) VALUES
('DI00101', 'Mạng Máy Tính 01', 'DI001', 'C0002', 20, 40, 'mmt01', 'On'),
('DI00102', 'Mạng Máy Tính 02', 'DI001', 'C0003', 25, 40, '12345', 'Off'),
('DI00103', 'Mạng Máy Tính 03', 'DI001', 'C0003', 25, 40, '12345', 'Off'),
('DI00201', 'Quản Trị Hệ Thống 01', 'DI002', 'C0001', 24, 30, 'qtht', 'On'),
('DI00202', 'Quản Trị Hệ Thống 02', 'DI002', 'C0002', 24, 30, 'chaobuoisang', 'Off'),
('DI00203', 'Quản Trị Hệ Thống 03', 'DI002', 'C0002', 24, 30, 'qtht', 'Off'),
('DI00301', 'An Toàn Hệ Thống 01', 'DI003', 'C0004', 20, 25, 'chaongaymoi', 'Off'),
('DI00302', 'An Toàn Hệ Thống 02', 'DI003', 'C0002', 20, 20, 'hello', 'On'),
('DI00303', 'An Toàn Hệ Thống 03', 'DI003', 'C0001', 24, 30, 'atht', 'Off'),
('DI00304', 'An Toàn Hệ Thống 04', 'DI003', 'C0001', 24, 30, 'atht', 'On'),
('DI00305', 'An Toàn Hệ Thống 05', 'DI003', 'C0001', 24, 30, 'atht', 'Off'),
('MT00101', 'Tư Tưởng Hồ Chí Minh 01', 'MT001', 'C0005', 20, 30, '12345', 'On'),
('MT00102', 'Tư Tưởng Hồ Chí Minh 02', 'MT001', 'C0005', 20, 30, '54321', 'Off');

-- --------------------------------------------------------

--
-- Table structure for table `ketqua`
--

CREATE TABLE `ketqua` (
  `MaHP` char(7) NOT NULL,
  `MaSV` char(5) NOT NULL,
  `TGBatDau` datetime DEFAULT NULL,
  `TGNopBai` datetime DEFAULT NULL,
  `Diem` float DEFAULT -1,
  `TrangThai` char(1) DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketqua`
--

INSERT INTO `ketqua` (`MaHP`, `MaSV`, `TGBatDau`, `TGNopBai`, `Diem`, `TrangThai`) VALUES
('DI00101', 'B1001', '2021-10-01 11:30:26', '2021-10-01 12:10:26', 8, 'T'),
('DI00301', 'B1001', '2021-10-02 09:32:18', '2021-10-02 09:57:18', 7.5, 'T'),
('DI00302', 'B1001', '2021-11-20 18:58:05', '2021-11-20 19:05:28', 8.5, 'T'),
('DI00101', 'B1002', '2021-10-06 21:27:22', '2021-10-06 21:28:40', 7.33, 'T'),
('DI00201', 'B1002', '2021-10-24 09:31:35', '2021-10-24 09:33:52', 9.58, 'T'),
('MT00101', 'B1002', '2021-10-24 09:38:46', '2021-10-24 09:40:13', 6, 'T'),
('DI00101', 'B1003', '2021-10-06 20:14:14', '2021-10-06 21:04:14', 8.67, 'T'),
('DI00201', 'B1003', '2021-10-23 18:01:00', '2021-10-23 19:17:37', 2.5, 'T'),
('DI00302', 'B1003', '2021-10-06 06:31:45', '2021-10-06 07:01:45', 9, 'T'),
('MT00101', 'B1003', '2021-10-28 18:43:30', '2021-10-28 18:44:11', 3.5, 'T'),
('DI00101', 'B1004', '2021-11-19 20:31:25', '2021-11-19 20:33:40', 8, 'T'),
('DI00305', 'B1004', '2021-10-21 11:52:11', '2021-10-21 11:54:31', 8.75, 'T'),
('MT00101', 'B1004', '2021-10-01 11:27:27', '2021-10-01 11:57:27', 3, 'T'),
('DI00101', 'B1005', '2021-10-07 17:06:20', '2021-10-07 17:07:21', 3.67, 'T'),
('DI00202', 'B1005', '2021-10-07 17:17:33', '2021-10-07 17:21:18', 3.75, 'T'),
('DI00303', 'B1005', '2021-10-21 12:05:48', '2021-10-21 12:06:24', 7.92, 'T'),
('DI00101', 'B1006', '2021-10-09 11:40:38', '2021-10-09 11:41:57', 7.67, 'T'),
('DI00304', 'B1006', '2021-10-23 08:49:03', '2021-10-23 08:52:35', 10, 'T'),
('DI00305', 'B1007', '2021-10-30 19:04:10', '2021-10-30 19:04:49', 9, 'T'),
('DI00304', 'B1008', '2021-10-21 12:09:44', '2021-10-21 12:10:12', 5.83, 'T'),
('DI00101', 'B1009', '2021-10-24 19:10:18', '2021-10-24 19:30:49', 10, 'T'),
('DI00201', 'B1009', '2021-10-24 19:03:46', '2021-10-24 19:06:15', 5.83, 'T'),
('DI00304', 'B1009', '2021-10-21 12:10:41', '2021-10-21 12:11:03', 3.33, 'T'),
('MT00101', 'B1009', '2021-10-24 19:07:39', '2021-10-24 19:10:04', 4.5, 'T'),
('DI00101', 'B1010', '2021-10-24 19:35:25', '2021-10-24 19:39:38', 10, 'T'),
('DI00101', 'B1011', '2021-10-24 19:42:08', '2021-10-24 19:42:49', 2.33, 'T'),
('DI00101', 'B1013', '2021-10-23 19:19:22', '2021-10-23 19:21:18', 5.67, 'T'),
('DI00201', 'B1013', '2021-10-23 19:21:36', '2021-10-23 19:22:09', 7.5, 'T'),
('DI00203', 'B1015', '2021-10-11 12:00:41', '2021-10-11 12:02:23', 9.17, 'T'),
('DI00303', 'B1015', '2021-10-26 19:18:15', '2021-10-26 19:20:45', 9.58, 'T'),
('DI00201', 'B1018', '2021-10-21 11:58:06', '2021-10-21 11:58:46', 7.92, 'T'),
('DI00303', 'B1018', '2021-10-21 11:59:56', '2021-10-21 12:00:46', 8.33, 'T'),
('DI00302', 'B1020', '2021-10-26 06:38:46', '2021-10-26 06:40:47', 9, 'T'),
('DI00202', 'B1021', '2021-10-08 08:33:34', '2021-10-08 08:36:18', 9.58, 'T'),
('DI00302', 'B1021', '2021-10-08 08:39:13', '2021-10-08 08:41:58', 10, 'T'),
('DI00202', 'B1022', '2021-10-11 18:10:47', '2021-10-11 18:11:34', 4.58, 'T'),
('MT00101', 'B1022', '2021-10-11 18:50:09', '2021-10-11 18:50:44', 4, 'T'),
('DI00102', 'B1023', '2021-10-11 18:53:48', '2021-10-11 18:54:25', 4.4, 'T'),
('DI00201', 'B1023', '2021-10-11 18:52:28', '2021-10-11 18:53:00', 6.67, 'T'),
('DI00302', 'B1023', '2021-10-11 18:54:44', '2021-10-11 18:55:11', 4, 'T'),
('MT00101', 'B1023', '2021-10-23 19:28:31', '2021-10-23 19:29:08', 1.5, 'T'),
('DI00302', 'B1026', '2021-10-25 10:47:07', '2021-10-25 10:49:07', 8.5, 'T'),
('DI00201', 'B1028', '2021-10-24 09:46:36', '2021-10-24 09:47:46', 9.17, 'T'),
('DI00202', 'B1030', '2021-10-16 11:22:13', '2021-10-16 11:23:10', 6.25, 'T'),
('MT00101', 'B1030', '2021-10-16 11:23:46', '2021-10-16 11:24:05', 3, 'T'),
('DI00202', 'B1032', '2021-10-16 10:57:16', '2021-10-16 10:58:27', 10, 'T'),
('DI00305', 'B1033', '2021-10-21 12:11:32', '2021-10-21 12:11:59', 4.58, 'T'),
('DI00101', 'B1034', '2021-10-24 21:53:32', '2021-10-24 21:54:32', 6, 'T'),
('DI00201', 'B1034', '2021-10-24 21:57:50', '2021-10-24 21:58:45', 9.17, 'T'),
('DI00101', 'B1036', '2021-10-24 22:02:12', '2021-10-24 22:03:13', 1.67, 'T'),
('DI00303', 'B1036', '2021-10-24 22:03:47', '2021-10-24 22:04:58', 7.5, 'T'),
('DI00101', 'B1037', '2021-10-11 19:02:09', '2021-10-11 19:02:44', 2.33, 'T'),
('DI00201', 'B1037', '2021-10-28 18:16:25', '2021-10-28 18:18:20', 9.58, 'T'),
('DI00302', 'B1037', '2021-10-28 18:22:31', '2021-10-28 18:24:31', 9.5, 'T'),
('DI00101', 'B1038', '2021-10-30 10:50:59', '2021-10-30 11:00:21', 9.25, 'T'),
('DI00201', 'B1038', '2021-10-21 12:15:04', '2021-10-21 12:15:35', 7.08, 'T'),
('DI00303', 'B1038', '2021-10-21 12:15:54', '2021-10-21 12:16:30', 6.25, 'T'),
('DI00304', 'B1038', '2021-11-05 19:38:57', '2021-11-05 19:44:51', 3.75, 'T'),
('MT00101', 'B1040', '2021-10-23 19:29:42', '2021-10-23 19:30:10', 2.5, 'T'),
('DI00101', 'B1041', '2021-10-08 09:03:16', '2021-10-08 09:04:10', 5, 'T'),
('DI00201', 'B1041', '2021-10-23 19:32:46', '2021-10-23 19:34:11', 8.75, 'T'),
('MT00101', 'B1041', '2021-10-08 09:31:20', '2021-10-08 09:32:56', 6, 'T'),
('DI00101', 'B1043', '2021-11-13 18:58:48', '2021-11-13 19:00:57', 3, 'T'),
('MT00101', 'B1045', '2021-11-22 11:14:59', '2021-11-22 11:15:37', 3, 'T'),
('DI00101', 'B1101', '2021-10-08 09:43:40', '2021-10-08 09:44:56', 8.67, 'T');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` char(2) NOT NULL,
  `TenKhoa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`) VALUES
('DI', 'Công nghệ thông tin và Truyền thông'),
('MT', 'Chính trị'),
('SP', 'Sư phạm');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` char(5) NOT NULL,
  `TenLop` varchar(50) NOT NULL,
  `MaKhoa` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoa`) VALUES
('DIC01', 'Công nghệ thông tin A1', 'DI'),
('DIC02', 'Công nghệ thông tin A2', 'DI'),
('DIC03', 'Công nghệ thông tin A3', 'DI'),
('DIH01', 'Hệ thống thông tin A1', 'DI'),
('DIK01', 'Khoa Học Máy Tính A1', 'DI');

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

CREATE TABLE `mon` (
  `MaMon` char(5) NOT NULL,
  `TenMon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`MaMon`, `TenMon`) VALUES
('DI001', 'Mạng Máy Tính'),
('DI002', 'Quản Trị Hệ Thống'),
('DI003', 'An Toàn Hệ Thống'),
('MT001', 'Tư Tưởng Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` char(5) NOT NULL,
  `TenSV` varchar(50) NOT NULL,
  `GioiTinh` varchar(5) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `MaLop` char(5) DEFAULT NULL,
  `SV_MatKhau` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `TenSV`, `GioiTinh`, `NgaySinh`, `MaLop`, `SV_MatKhau`) VALUES
('B1001', 'Võ Thị Thúy An', 'Nữ', '2000-12-01', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1002', 'Lê Hoàng Anh', 'Nam', '2000-06-05', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1003', 'Nguyễn Hương Giang', 'Nữ', '1999-12-30', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1004', 'Võ Ngân Hà', 'Nữ', '1999-02-09', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1005', 'Lê Ngọc Hân', 'Nữ', '2000-09-21', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1006', 'Nguyễn Trung Hậu', 'Nam', '2000-10-06', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1007', 'Nguyễn Trung Hiếu', 'Nam', '2000-06-08', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1008', 'Bành Quốc Huy', 'Nam', '1999-01-04', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1009', 'Trần Quang Khải', 'Nam', '2000-11-11', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1010', 'Lê Trung Kiên', 'Nam', '1999-03-13', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1011', 'Nguyễn Hương Ly', 'Nữ', '2000-01-01', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1012', 'Nguyễn Thị Tuyết Mảnh', 'Nữ', '2000-12-30', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1013', 'Nguyễn Trung Nam', 'Nam', '2000-09-09', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1014', 'Nguyễn Lê Phú Quý', 'Nam', '2000-11-11', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1015', 'Huỳnh Thanh Sang', 'Nam', '2000-12-03', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1016', 'Võ Hoàng Thịnh', 'Nam', '2000-10-15', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1017', 'Trần Thị Thanh Tuyền', 'Nữ', '2000-06-03', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1018', 'Trần Thị Thúy Vy', 'Nữ', '2000-10-23', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1019', 'Nguyễn Hoàng Yến', 'Nữ', '2000-12-04', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1020', 'Nguyễn Như Ý', 'Nữ', '2000-03-23', 'DIC01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1021', 'Nguyễn Võ Trường An', 'Nam', '2000-12-30', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1022', 'Huỳnh Gia Bảo', 'Nam', '2000-05-25', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1023', 'Lê Huỳnh Tiến Đạt', 'Nam', '2000-04-16', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1024', 'Nguyễn Văn Giang', 'Nam', '1999-12-27', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1025', 'Võ Thị Thúy Hằng', 'Nữ', '2000-03-01', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1026', 'Bùi Quang Huy', 'Nam', '2000-02-02', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1027', 'Trần Nguyễn Anh Khoa', 'Nam', '2000-09-14', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1028', 'Nguyễn Khánh Linh', 'Nam', '2000-06-07', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1029', 'Trần Nguyễn Ngọc Linh', 'Nữ', '2000-09-14', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1030', 'Nguyễn Văn Luyến', 'Nam', '2000-12-01', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1031', 'Nguyễn Lê Trung Nam', 'Nam', '2000-04-14', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1032', 'Nguyễn Ngọc Ngân', 'Nữ', '2000-01-29', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1033', 'Hồ Nguyễn Thành Nhân', 'Nam', '2000-09-30', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1034', 'Đặng Phú Quý', 'Nam', '2000-02-28', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1035', 'Nguyễn Thanh Sang', 'Nam', '2000-12-03', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1036', 'Mai Quốc Vũ', 'Nam', '2000-02-06', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1037', 'Lê Thị Bảo Yến', 'Nữ', '2000-09-04', 'DIC02', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1038', 'Trần Gia Bảo', 'Nam', '2000-11-11', 'DIC03', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1039', 'Trương Trần Huy Hoàng', 'Nam', '1999-03-31', 'DIC03', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1040', 'Nguyễn Quang Linh', 'Nam', '2000-12-24', 'DIC03', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1041', 'Võ Văn Minh', 'Nam', '2000-07-12', 'DIC03', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1042', 'Nguyễn Văn Khánh', 'Nam', '2000-10-05', 'DIC03', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1043', 'Nguyễn Thị Tường Vy', 'Nữ', '2000-04-23', 'DIC03', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1044', 'Nguyễn Võ Duy Khương', 'Nam', '1999-09-13', 'DIC03', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1045', 'Lê Trung Nam', 'Nam', '2000-12-12', 'DIH01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1101', 'Nguyễn Quang Linh', 'Nam', '2000-03-02', 'DIH01', '8cb2237d0679ca88db6464eac60da96345513964'),
('B1121', 'Lê Võ Thiên Ân', 'Nam', '2000-12-09', 'DIK01', '8cb2237d0679ca88db6464eac60da96345513964');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`MaBoMon`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`MaCH`),
  ADD KEY `MaMon` (`MaMon`);

--
-- Indexes for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaBoMon` (`MaBoMon`);

--
-- Indexes for table `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`MaHP`),
  ADD KEY `MaMon` (`MaMon`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Indexes for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`MaSV`,`MaHP`),
  ADD KEY `MaHP` (`MaHP`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Indexes for table `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`MaMon`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `MaCH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bomon`
--
ALTER TABLE `bomon`
  ADD CONSTRAINT `bomon_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Constraints for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `cauhoi_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `mon` (`MaMon`);

--
-- Constraints for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD CONSTRAINT `giaovien_ibfk_1` FOREIGN KEY (`MaBoMon`) REFERENCES `bomon` (`MaBoMon`);

--
-- Constraints for table `hocphan`
--
ALTER TABLE `hocphan`
  ADD CONSTRAINT `hocphan_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `mon` (`MaMon`),
  ADD CONSTRAINT `hocphan_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giaovien` (`MaGV`);

--
-- Constraints for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD CONSTRAINT `ketqua_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `ketqua_ibfk_2` FOREIGN KEY (`MaHP`) REFERENCES `hocphan` (`MaHP`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
