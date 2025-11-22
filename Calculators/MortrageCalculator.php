<div id="piti-calculator" style="max-width:900px;margin:auto;padding:20px;border:1px solid #ddd;border-radius:8px;background:#fff;font-family:system-ui;">
    <h2 style="color:#0073aa;margin-top:0;">Advanced PITI Mortgage Calculator</h2>

    <div style="display:flex;flex-wrap:wrap;gap:15px;">
        <label style="flex:1 1 250px;">
            Purchase Price / Loan Amount
            <input type="number" id="p_price" value="300000" style="width:100%;padding:8px;border:1px solid #ccc;border-radius:4px;">
        </label>

        <label style="flex:1 1 250px;">
            Down Payment (%)
            <input type="number" id="p_down" value="20" style="width:100%;padding:8px;border:1px solid:#ccc;border-radius:4px;">
        </label>

        <label style="flex:1 1 250px;">
            Loan Term (Years)
            <input type="number" id="p_term" value="30" style="width:100%;padding:8px;border:1px solid:#ccc;border-radius:4px;">
        </label>

        <label style="flex:1 1 250px;">
            Annual Interest Rate (%)
            <input type="number" id="p_rate" value="6.5" style="width:100%;padding:8px;border:1px solid:#ccc;border-radius:4px;">
        </label>

        <label style="flex:1 1 250px;">
            Property Tax (annual %) OR fixed amount
            <input type="number" id="p_tax_percent" value="1.25" placeholder="% per year" style="width:100%;padding:8px;border:1px solid:#ccc;border-radius:4px;margin-bottom:5px;">
            <input type="number" id="p_tax_fixed" value="0" placeholder="annual amount" style="width:100%;padding:8px;border:1px solid:#ccc;border-radius:4px;">
        </label>

        <label style="flex:1 1 250px;">
            Homeowner’s Insurance (annual)
            <input type="number" id="p_insurance" value="1200" style="width:100%;padding:8px;border:1px solid:#ccc;border-radius:4px;">
        </label>

        <label style="flex:1 1 250px;">
            PMI (%) if down &lt; 20%
            <input type="number" id="p_pmi" value="0.5" style="width:100%;padding:8px;border:1px solid:#ccc;border-radius:4px;">
        </label>

        <label style="flex:1 1 250px;">
            HOA Fees (monthly)
            <input type="number" id="p_hoa" value="0" style="width:100%;padding:8px;border:1px solid:#ccc;border-radius:4px;">
        </label>

        <div style="flex-basis:100%;margin-top:10px;">
            <button id="p_calc_btn" style="background:#0073aa;color:#fff;border:none;padding:10px 18px;border-radius:6px;cursor:pointer;">Calculate</button>
            <button id="p_reset_btn" style="background:#eee;color:#333;border:none;padding:10px 18px;border-radius:6px;margin-left:10px;cursor:pointer;">Reset</button>
        </div>
    </div>

    <div id="piti-results" style="margin-top:20px;padding:15px;background:#fafafa;border:1px solid #eee;border-radius:8px;display:none;">
        <h3>Monthly Breakdown</h3>
        <p>Principal & Interest: <strong id="r_pi"></strong></p>
        <p>Property Tax (monthly): <strong id="r_tax"></strong></p>
        <p>Insurance (monthly): <strong id="r_ins"></strong></p>
        <p>PMI (monthly): <strong id="r_pmi"></strong></p>
        <p>HOA (monthly): <strong id="r_hoa"></strong></p>
        <p style="font-weight:bold;font-size:1.2em;">Total Monthly Payment: <strong id="r_total"></strong></p>

        <h3>Summary</h3>
        <p>Loan Amount: <strong id="r_loan"></strong></p>
        <p>Total Interest (life of loan): <strong id="r_interest"></strong></p>
        <p>Total Payments (incl. taxes/insurance): <strong id="r_payments"></strong></p>
    </div>

    <p style="text-align:right;color:#666;margin-top:15px;">
        Copyright 2025 All Rights Reserved by AskQuora.com
    </p>
</div>

<script>
(function(){
    function format(x){ return "$" + Number(x).toLocaleString(undefined,{minimumFractionDigits:2,maximumFractionDigits:2}); }

    function calculate(){
        let price = parseFloat(p_price.value)||0;
        let down = parseFloat(p_down.value)||0;
        let term = parseFloat(p_term.value)||30;
        let rate = parseFloat(p_rate.value)||0;

        let taxPercent = parseFloat(p_tax_percent.value)||0;
        let taxFixed = parseFloat(p_tax_fixed.value)||0;
        let insurance = parseFloat(p_insurance.value)||0;
        let pmiPercent = parseFloat(p_pmi.value)||0;
        let hoa = parseFloat(p_hoa.value)||0;

        let loan = price - (price * (down/100));
        let monthlyRate = (rate/100)/12;
        let n = term * 12;

        // PI calculation
        let PI = monthlyRate === 0 ? loan/n :
            loan * (monthlyRate * Math.pow(1+monthlyRate, n)) / (Math.pow(1+monthlyRate,n)-1);

        // Property tax monthly
        let tax = taxFixed>0 ? taxFixed/12 : (price*(taxPercent/100))/12;

        // Insurance monthly
        let ins = insurance/12;

        // PMI if down < 20%
        let pmi = (down < 20) ? ((loan*(pmiPercent/100))/12) : 0;

        // Total monthly
        let total = PI + tax + ins + pmi + hoa;

        // Interest calculation
        let balance = loan, totalInterest = 0;
        for(let i=0;i<n;i++){
            let interest = balance * monthlyRate;
            let principal = PI - interest;
            balance -= principal;
            totalInterest += interest;
            if(balance <= 0) break;
        }

        // Total payments
        let totalPayments = total * n;

        // Show results
        document.getElementById('r_pi').innerText = format(PI);
        document.getElementById('r_tax').innerText = format(tax);
        document.getElementById('r_ins').innerText = format(ins);
        document.getElementById('r_pmi').innerText = format(pmi);
        document.getElementById('r_hoa').innerText = format(hoa);

        document.getElementById('r_total').innerText = format(total);

        document.getElementById('r_loan').innerText = format(loan);
        document.getElementById('r_interest').innerText = format(totalInterest);
        document.getElementById('r_payments').innerText = format(totalPayments);

        document.getElementById('piti-results').style.display = "block";
    }

    document.getElementById("p_calc_btn").addEventListener("click", calculate);
    document.getElementById("p_reset_btn").addEventListener("click", ()=>location.reload());
})();
</script>
