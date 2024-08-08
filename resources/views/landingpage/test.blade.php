<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>oneam</title>
    <style>
      @media print {
        @page {
          size: A4;
          margin: 20mm;
        }

        body {
          width: 210mm;
          margin: 0;
        }

        .container {
          width: 100%;
        }
      }

      .container {
        max-width: 210mm;
        margin: auto;
      }

      .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
       }
      .grid-item {
        margin-bottom: 10px;
      }

      .grid-item h4, .grid-item p {
        margin: 1px;
      }

      .baselayer-rating .grid-container{
        align-items: center;
        justify-content: space-around;
      }

      .kyb-rating{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
        background-color: #D0FED0;
        color: #39764E;
        border-radius: 5px;
        padding: 0px 15px 10px 15px;
        font-weight: bold;
        border: 1px solid #ddd;
        margin-top:5px;
      }

      .kyb-rating-yellow{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
        background-color: #FFF3D0;
        color: #A8733F;
        border-radius: 5px;
        padding: 0px 15px 10px 15px;
        font-weight: bold;
        border: 1px solid #ddd;
        margin-top:5px;
      }

      .kyb-rating-red{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
        background-color: #FED0D0;
        color: #BC3A48;
        border-radius: 5px;
        padding: 0px 15px 10px 15px;
        font-weight: bold;
        border: 1px solid #ddd;
        margin-top:5px;
      }

      .kyb-rating-blue{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
        background-color: #DAF9FF;
        color: #346B68;
        border-radius: 5px;
        padding: 0px 15px 10px 15px;
        font-weight: bold;
        border: 1px solid #ddd;
        margin-top:5px;
      }


      .table-row{
        border-bottom: 2px solid #ddd;
      }

      .separator{
        min-height: 5px;
        border: none;
        background-color: #ddd;
        width: 100%;
        border-radius: 25px;
        margin-top: 40px;
      }

      section{
        margin-top: 50px;
      }

      .title h3{
        color: #C23EED;
      }

      .state-filings{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
        font-weight: bold;
      }

      .badge-success{
        padding: 5px 10px;
        background-color: #D0FED0;
        color: #39764E;
        border-radius: 10px;
        margin: 0 10px;
      }

      .badge-default{
        background-color: #ddd;
        padding: 5px 10px;
        border-radius: 10px;
        margin: 0 10px;
        color: #535252;
      }

      .rating-desc p{
        margin: 5px 0;
        font-weight: bold;
      }

      .kyb-title{
        text-align: center;
      }

      td p, h4 {
        margin: 0;
      }

      /* Adding padding to create space between table rows */
      td {
        padding: 10px 0;
      }

      .header p{
        margin: 4px 0;
        font-weight: bold;
      }

      .round-green{        
        background-color: #D0FED0;
        color: #39764E;
        padding: 6px 15px;
        border-radius: 50%;
      }
      .round-blue{        
        background-color: #DAF9FF;
        color: #346B68;
        padding: 6px 15px;
        border-radius: 50%;
      }
      .round-red{        
        background-color: #FED0D0;
        color: #BC3A48;
        padding: 6px 15px;
        border-radius: 50%;
      }

    </style>
  </head>
  <body>
    <div class="container">
        <div class="header">
            <div>
                <img src="" alt="">Logo
                <h4>Business Report</h4>
            </div>
            <div>
                <h3>NORTECH NORTH AMERICA, INC.</h3>                
            </div>
            <div>
                <p>Business ID : </p>
                <p>Search ID : </p>
            </div>

        </div>
        <section class="application-details">
            <div>
                <div class="title">
                    <h3>APPLICATION DETAILS</h3>
                    <p>These are the specific details that were entered into the OneAm Platform to initiate the search for this business.</p>
                </div>
                <div class="grid-container">
                    <div class="grid-item">
                        <h4>Legal Entity Name</h4>
                        <p>Item 1</p>
                    </div>
                    <div class="grid-item">
                        <h4>Legal Entity Address</h4>
                        <p>Item 2</p>
                    </div>
                    <div class="grid-item">
                        <h4>Email</h4>
                        <p>Item 3</p>    
                    </div>  
                    <div class="grid-item">
                        <h4>TIN</h4>
                        <p>Item 4</p>    
                    </div>
                    <div class="grid-item">
                        <h4>Business Officer</h4>
                        <p>Item 5</p>    
                    </div>
                    <div class="grid-item"></div>  
                    <div class="grid-item">
                        <h4>Phone Number</h4>
                        <p>Item 6</p>    
                    </div>
                    <div class="grid-item">
                        <h4>Website</h4>
                        <p>Item 7</p>    
                    </div>
                    <div class="grid-item"></div>  
                </div>
            </div>    
        </section>
        <section class="baselayer-rating">
            <div>
                <div class="title">
                    <h3>BASELAYER RATING OVERVIEW</h3>
                    <p>Baselayer ratings can range from A to F for Risk, KYB, and Fraud. Poor scores indicate a greater need for manual review.</p>
                </div>
                <div class="grid-container">
                    <div class="grid-item">
                        <h4 class="kyb-title">KYB Rating</h4>
                        <div class="kyb-rating">
                            <h1>A</h1>
                            <p>Low Risk</p>
                        </div>
                    </div>
                    <div class="grid-item">
                        <h4 class="kyb-title">KYB Rating</h4>
                        <div class="kyb-rating-yellow">
                            <h1>C</h1>
                            <p>High Risk</p>
                        </div>
                    </div>
                    <div class="grid-item rating-desc">
                        <p>A Rating | Low Risk</p>    
                        <p>B Rating | Mid Risk</p>    
                        <p>C Rating | High Risk</p>    
                        <p>F Rating | Fail</p>    
                    </div>                      
                </div>
            </div>
        </section>
        <section>
            <div>
                <div class="title">
                    <h3>BUSINESS DETAILS</h3>
                    <p>This summary presents all key business details gathered by Baselayer for the identified business.</p>
                </div>
                <div style="display: grid">
                    <table style="border-collapse: collapse; width: 100%;">
                        <tr class="table-row">
                            <td style="width: 50%">
                                <h4>Legal Entity Address</h4>
                                <p>address 1</p>                            
                            </td>
                            <td>
                                <h4>Company Name Inc.</h4>
                                <p>address 2</p>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Entity Type</h4>
                            </td>
                            <td><h4>C Corporation</h4></td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>TIN</h4>
                            </td>
                            <td><h4>-</h4></td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Legal Entity Address</h4>
                            </td>
                            <td><h4>Address 3</h4></td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Incorporation State</h4>
                            </td>
                            <td>
                                <div style="display: flex; align-items: center;">
                                    <h4>Virginia</h4>
                                    <p class="badge-success">active</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Incorporation Date</h4>
                            </td>
                            <td>
                                <div>
                                    <h4>01/01/2024</h4>
                                    <p>6 months</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Phone Number</h4>
                            </td>
                            <td>
                                <h4>-</h4>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Website</h4>
                            </td>
                            <td>
                                <h4>www.samplpe.com</h4>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>NAICS Code</h4>
                            </td>
                            <td>
                                <div style="display: flex; align-items: center;">
                                    <h4>313222</h4>
                                    <p class="badge-success">active</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Industry </h4>
                            </td>
                            <td>
                                <h4>Sheet Metal Work Manufacturing</h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <section>
            <div>
                <div class="title">
                    <h3>SECRETARY OF STATE FILINGS</h3>
                    <p>This summary presents all associated Secretary of State filings gathered by Baselayer for the identified business.</p>
                </div>
                <div class="grid-container" style="justify-content: space-evenly; margin-bottom: 3rem;">
                    <div class="grid-item">
                        <div class="state-filings">
                            <h1 class="round-green">3</h1>
                            <p>ACTIVE FILINGS</p>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="state-filings">
                            <h1 class="round-red" >0</h1>
                            <p>INACTIVE FILINGS</p>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="state-filings">
                            <h1  class="round-blue">0</h1>
                            <p>UNKNOWN</p>
                        </div>   
                    </div>                      
                </div>
                <div style="display: grid">
                    <table style="border-collapse: collapse; width: 100%;">
                        <tr class="table-row">
                            <td style="width: 50%">
                                <div style="display: flex; align-items: center;">
                                    <h4>Virginia</h4>
                                    <p class="badge-default">badge1</p>                            
                                    <p class="badge-success">badge2</p>                                
                                </div>
                                <p>detail</p>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Business Name</h4>
                            </td>
                            <td><h4>Nortech North America INC</h4></td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Date Flied</h4>
                            </td>
                            <td><h4>01/21/2012</h4></td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Address</h4>
                                <p>address type</p>
                            </td>
                            <td>
                                <h4>12310 Pinerest Rd Ste 305</h4>
                                <p>Commercial</p>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Registered Agent</h4>
                            </td>
                            <td>
                                <h4>Gokul Raaj Michana</h4>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Officers</h4>
                            </td>
                            <td>
                                <h4>Gokul Raaj Michana</h4>
                            </td>
                        </tr>
                    </table>

                    <hr class="separator">
                    <table style="border-collapse: collapse; width: 100%;">
                        <tr class="table-row">
                            <td style="width: 50%">
                                <div style="display: flex; align-items: center;">
                                    <h4>Virginia</h4>
                                    <p class="badge-default">badge1</p>                            
                                    <p class="badge-success">badge2</p>                                
                                </div>
                                <p>detail</p>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Business Name</h4>
                            </td>
                            <td><h4>Nortech North America INC</h4></td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Date Flied</h4>
                            </td>
                            <td><h4>01/21/2012</h4></td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Address</h4>
                                <p>address type</p>
                            </td>
                            <td>
                                <h4>12310 Pinerest Rd Ste 305</h4>
                                <p>Commercial</p>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Registered Agent</h4>
                            </td>
                            <td>
                                <h4>Gokul Raaj Michana</h4>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>
                                <h4>Officers</h4>
                            </td>
                            <td>
                                <h4>-</h4>
                            </td>
                        </tr>
                    </table>
                    <hr class="separator">
                </div>
            </div>
        </section>
        <section>
            <div>
                <div class="title">
                    <h3>ADDRESSES</h3>
                    <p>This summary presents all associated addresses gathered by Baselayer for the identified business.</p>
                </div>
                <div style="display: grid">
                    <table style="border-collapse: collapse; width: 100%;">
                        <tr class="table-row">
                            <th style="width: 50%">Address</th>
                            <th style="width: 50%">Address Type</th>
                        </tr>
                        <tr class="table-row">
                            <td>36 S 18th Ave Ste D, Brighton, CO 80601</td>
                            <td>
                                <div style="display: flex; justify-content: center;">
                                    <p class="badge-default">Commercial</p>
                                    <p class="badge-default">Deliverable</p>    
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>12310 Pinecrest Rd Ste 306, Reston, VA 20191</td>
                            <td>
                                <div style="display: flex; justify-content: center;">
                                    <p class="badge-default">Commercial</p>
                                    <p class="badge-default">Deliverable</p>    
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>2473 CR 3900, Coffeyville, KS 67337</td>
                            <td>
                                <div style="display: flex; justify-content: center;">
                                    <p class="badge-default">Commercial</p>
                                    <p class="badge-default">Deliverable</p>    
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td>8804 W 148th Ter, Overland Park, KS 66221</td>
                            <td>
                                <div style="display: flex; justify-content: center;">
                                    <p class="badge-default">Commercial</p>
                                    <p class="badge-default">Deliverable</p>    
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <section>
            <div>
                <div class="title">
                    <h3>BUSINESS OFFICERS</h3>
                    <p>This summary presents all associated Business Officers gathered by Baselayer for the identified business.</p>
                </div>
                <div style="display: grid">
                    <table style="border-collapse: collapse; width: 100%;">
                        <tr class="table-row">
                            <th style="width: 50%; text-align:left">Officer Name</th>
                            <th style="width: 50%; text-align:left">SoS Fillings</th>
                        </tr>
                        <tr class="table-row">
                            <td>Gokul Raaj Mohana Kannan</td>
                            <td>VA
                            </td>
                        </tr>                       
                    </table>
                </div>
            </div>
        </section>
        <section>
            <div>
                <div class="title">
                    <h3>WATCHLISTS</h3>
                    <p>This summary presents Watchlist hits gathered by Baselayer on the identified business or its business officers.</p>
                </div>
                <div>
                    No Watchlist Hits.
                </div>
            </div>
        </section>
    </div>
  </body>
</html>