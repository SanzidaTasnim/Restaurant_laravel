<style>
    * {
    box-sizing: border-box;
  }

html,
body {
width: 100%;
height: 100%;
margin: 0;
}
.shopping-cart {
    width: 750px;
    height: 423px;
    margin: 80px auto;
    margin-top: 170px;
    background: #FFFFFF;
    box-shadow: 10px 10px 30px rgb(223, 216, 216);
    border-radius: 6px;

    display: flex;
    flex-direction: column;
  }
  .title {
    height: 60px;
    border-bottom: 1px solid #E1E8EE;
    padding: 20px 30px;
    color: #5E6977;
    font-size: 18px;
    font-weight: 400;
  }

  .item {
    padding: 20px 30px;
    height: 120px;
    display: flex;
  }

  .item:nth-child(3) {
    border-top:  1px solid #E1E8EE;
    border-bottom:  1px solid #E1E8EE;
  }
  .buttons {
    position: relative;
    padding-top: 30px;
    margin-right: 60px;
  }
  .delete-btn,
  .like-btn {
    display: inline-block;
    Cursor: pointer;
  }
  .delete-btn {
    width: 18px;
    height: 17px;
    background: url(&amp;quot;delete-icn.svg&amp;quot;) no-repeat center;
  }

  .like-btn {
    position: absolute;
    top: 30px;
    left: 22px;
    background: url('twitter-heart.png');
    width: 60px;
    height: 60px;
    background-size: 2900%;
    background-repeat: no-repeat;
  }
  .is-active {
    animation-name: animate;
    animation-duration: .8s;
    animation-iteration-count: 1;
    animation-timing-function: steps(28);
    animation-fill-mode: forwards;
  }

  @keyframes animate {
    0%   { background-position: left;  }
    50%  { background-position: right; }
    100% { background-position: right; }
  }
  .image {
    margin-right: 50px;
  }

  Let’s add some basic style to  product name and description.
  .description {
    padding-top: 10px;
    margin-right: 60px;
    width: 115px;
  }

  .description span {
    display: block;
    font-size: 14px;
    color: #43484D;
    font-weight: 400;
  }

  .description span:first-child {
    margin-bottom: 5px;
  }
  .description span:last-child {
    font-weight: 300;
    margin-top: 8px;
    color: #86939E;
  }
  .quantity {
    padding-top: 20px;
    margin-right: 60px;
    margin-left: 50px;
  }
  .quantity input {
    -webkit-appearance: none;
    border: none;
    text-align: center;
    width: 32px;
    font-size: 16px;
    color: #43484D;
    font-weight: 300;
  }

  .plus-btn,.minus-btn {
    width: 30px;
    height: 30px;
    background-color: #E1E8EE;
    border-radius: 6px;
    border: none;
    cursor: pointer;
  }
  

  button:focus,
  input:focus {
    outline:0;
  }
  .total-price {
    width: 83px;
    padding-top: 27px;
    text-align: center;
    font-size: 16px;
    color: #43484D;
    font-weight: 300;
  }
  @media (max-width: 800px) {
    .shopping-cart {
      width: 100%;
      height: auto;
      overflow: hidden;
    }
    .item {
      height: auto;
      flex-wrap: wrap;
      justify-content: center;
    }
    .image img {
      width: 5%;
    }
    .image,
    .quantity,
    .description {
      width: 100%;
      text-align: center;
      margin: 6px 0;
    }
    .buttons {
      margin-right: 20px;
    }
  }

</style>
