@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            
            <tbody>
            <tr>
                <td>Amount</td>
                <td>$ {{ $total }}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$ 0</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>$ 10</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>{{ $total+10 }}</td>
            </tr>
              
            </tbody>
          </table>

          <form action="/action_page.php">
            <div class="form-group">
                <textarea name="textarea" class="form-control" placeholder="enter your address" required></textarea>
            </div>
            <div class="form-group">
              <label for="payment">Payment:</label><br><br>
              <input type="radio" name="payment"><span>Online Payment</span><br><br>
              <input type="radio" name="payment"><span>EMI Payment</span><br><br>
              <input type="radio" name="payment"><span>Cash On Delivery</span><br><br>              
            </div>
            <button type="submit" class="btn btn-success">Order now</button>
          </form>
    </div>
   
</div>
@endsection