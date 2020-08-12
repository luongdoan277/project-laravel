@extends('template.templateAdmin')

@section('content')
    <div class="order-page-content">
        <div class="search-order">
            <form action="" class="form-order">
                <input type="text" name="value" placeholder="Name or code orders..." value="name">
                <button type="submit"><i class="fas fa-search"></i> Search</button>
            </form>
            <div class="month-option">
                <label>Month</label>
                <select class="select-month">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="">
                        example 1
                    </option>
                    <option value="">
                        example 2
                    </option>
                    <option value="">
                        example 1
                    </option>
                </select>
            </div>
        </div>
        <div class="order-shoppingcart">
            <div class="header-order">
                <span>Order Shopping</span>
            </div>
            <div class="order-content">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Total Price</th>
                        <th>Detail</th>
                        <th>Delete</th>
                    </tr>
                    <tr class="bb">
                        <td>1</td>
                        <td>Khanh</td>
                        <td>
                            <div class="status">
                                <span>new</span>
                            </div>
                        </td>
                        <td>21-09-2020</td>
                        <td>$350</td>
                        <td><a href="">
                                <i class="far fa-eye"></i>
                            </a>
                        </td>
                        <td><a href="">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class="bb">
                        <td>1</td>
                        <td>Khanh</td>
                        <td>
                            <div class="status">
                                <span>new</span>
                            </div>
                        </td>
                        <td>21-09-2020</td>
                        <td>$350</td>
                        <td><a href="">
                                <i class="far fa-eye"></i>
                            </a>
                        </td>
                        <td><a href="">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class="bb">
                        <td>1</td>
                        <td>Khanh</td>
                        <td>
                            <div class="status">
                                <span>new</span>
                            </div>
                        </td>
                        <td>21-09-2020</td>
                        <td>$350</td>
                        <td><a href="">
                                <i class="far fa-eye"></i>
                            </a>
                        </td>
                        <td><a href="">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class="bb">
                        <td>1</td>
                        <td>Khanh</td>
                        <td>
                            <div class="status">
                                <span>new</span>
                            </div>
                        </td>
                        <td>21-09-2020</td>
                        <td>$350</td>
                        <td><a href="">
                                <i class="far fa-eye"></i>
                            </a>
                        </td>
                        <td><a href="">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
@endsection
