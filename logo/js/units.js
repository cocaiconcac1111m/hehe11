var currentPicked = '';
var currentPrice = '';
var currentImgSrc = '';
var isSented = false;

function copyText(text) {
  setModal('Đã copy vào bộ nhớ tạm!');

  // Create a fake `textarea` and set the contents to the text you want to copy
  const storage = document.createElement('textarea');
  storage.value = text;
  const element = document.body;
  element.appendChild(storage);

  // Copy the text in the fake `textarea` and remove the `textarea`
  storage.select();
  storage.setSelectionRange(0, 99999);
  document.execCommand('copy');
  element.removeChild(storage);
}

function pickProduct(idProduct) {
  currentPicked = idProduct;
  let product = document.getElementById(currentPicked);
  currentPrice = product.getElementsByClassName('product-card-price')[0].innerText;
  currentImgSrc = product.getElementsByTagName('img')[0].src;

  let currentProduct = document.getElementById('current-product');
  currentProduct.getElementsByTagName('img')[0].src = currentImgSrc;
  document.getElementById('current-id').innerHTML = `MÃ ĐANG CHỌN: <span style="color: red;">${currentPicked}</span>`;
  document.getElementById('final-price').innerText = currentPrice;
  console.log(`Picked ${currentPicked}`);
}

function setModal(text) {
  var modalBox = document.getElementById('copyModal');
  modalBox.getElementsByTagName('h3')[0].innerHTML = text;
}

async function sendRequest() {
  if (!isSented) {
    var linkContact = document.getElementsByClassName('logo-contact-input')[0].value;
    var nameWebsite = document.getElementById('logo-name-input').value;

    if (currentPicked !== '') {
      if (nameWebsite !== '') {
        if (linkContact !== '') {
          setModal('Yêu cầu đã được gửi!');

          const url = `${document.location.origin.split('?')[0]}/sendRequest.php`;

          const data = {
            linkContact: linkContact,
            nameWebsite: nameWebsite,
            currentPicked: currentPicked,
            currentPrice: currentPrice
          };

          try {
            const response = await postData(url, data);
            console.log(response);
            isSented = true;
          } catch (error) {
            console.error('Error:', error);
          }
        } else {
          setModal('Không được để trống phần thông tin liên hệ hoặc tên miền website cần làm logo\nVui lòng điền đủ tên miền (vd: iamhoang.vn); link liên hệ Facebook, zalo, telegram...');
        }
      } else {
        setModal('Bạn điền tên miền website cần làm!');
      }
    } else {
      setModal('Bạn chưa chọn logo cần làm!');
    }
  } else {
    setModal('Bạn đã gửi 1 yêu cầu trước đó rồi! Tải lại trang để làm mới!');
  }
}

async function postData(url = '', data = {}) {
  try {
    const response = await fetch(url, {
      method: 'POST',
      mode: 'cors',
      cache: 'no-cache',
      credentials: 'same-origin',
      headers: {
        'Content-Type': 'application/json'
      },
      redirect: 'follow',
      referrerPolicy: 'no-referrer',
      body: JSON.stringify(data)
    });

    if (!response.ok) {
      throw new Error('Network response was not ok');
    }

    return response.text();
  } catch (error) {
    throw new Error('Error occurred while fetching:', error);
  }
}
