import React from "react";

import './BookATable.css';

const BookATable = () => (
    <div className="book-a-table" id="book-a-table">
        <div className="img">
            <div className="hsub0">
                <h1 className="menu-title">Book A Table</h1>
            </div> 
        </div>
        <div className="take-information">
            <div className="location">
                <span><i class="fa-solid fa-location-dot"></i> 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội</span>
            </div>
            <div className="book-a-table-content">
                <div className="open-close-time">
                    <span className="h2">Bữa trưa:</span><br></br>
                    <span className="h3">Thứ 2 - Chủ nhật 11:30 - 15:00</span><br></br>
                    <span className="h2">Bữa tối:</span><br></br>
                    <span className="h3">Thứ 2 - Chủ nhật 17:30 - 23:00</span><br></br>
                </div>
                <div className="form">
                    <span className="h3">Quý khách đặt hàng vui lòng gọi đến số điện thoại:</span><br></br>
                    <span className="h1">+84 836 266 866</span><br></br>
                    <span className="h3">Hoặc để lại thông tin, nhân viên nhà hàng sẽ liên hệ sau vài phút:</span><br></br>
                    <form method="POST">
                        <input type="text" name="get-name" id="get-name" placeholder="Họ và tên" />
                        <input type="text" name="get-phone-number" id="get-phone-number" placeholder="Số điện thoại" />
                        <input type="email" name="get-email" id="get-email" placeholder="Email"/>
                        <div className="guest-number"><span>Số lượng khách: </span>
                            <input type="number" name="get-number" min="1" max="20" id="get-number"  defaultValue="1"/>
                        </div>
                        <textarea name="get-notification" id="get-notification" placeholder="Ghi chú" rows="10"></textarea>
                        <input type="submit" name="submit" id="submit" value="XÁC NHẬN"/>   
                    </form>
                </div>
            </div>
        </div>
    </div>
);

export default BookATable;