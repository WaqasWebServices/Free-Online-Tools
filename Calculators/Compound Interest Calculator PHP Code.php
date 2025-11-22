<div class="mortgage-calculator-wrapper" style="max-width: 100%; overflow: hidden;">
<style>
.mortgage-calc-container {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    max-width: 100%;
    background: #f8f9fa;
    border-radius: 12px;
    padding: 20px;
    margin: 20px 0;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    border: 1px solid #e9ecef;
}

.mortgage-calc-container * {
    box-sizing: border-box;
}

.mortgage-calc-header {
    text-align: center;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px solid #3498db;
}

.mortgage-calc-header h2 {
    color: #2c3e50;
    margin: 0 0 8px 0;
    font-size: 1.5em;
}

.mortgage-calc-header p {
    color: #7f8c8d;
    margin: 0;
    font-size: 0.95em;
}

.mortgage-calc-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
}

@media (min-width: 768px) {
    .mortgage-calc-grid {
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }
}

.mortgage-input-section,
.mortgage-results-section {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.mortgage-section-title {
    color: #2c3e50;
    margin: 0 0 20px 0;
    font-size: 1.2em;
    font-weight: 600;
}

.mortgage-form-group {
    margin-bottom: 18px;
}

.mortgage-form-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
    color: #2c3e50;
    font-size: 0.9em;
}

.mortgage-form-group input,
.mortgage-form-group select {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
    transition: border-color 0.3s;
    background: white;
}

.mortgage-form-group input:focus,
.mortgage-form-group select:focus {
    outline: none;
    border-color: #3498db;
}

.mortgage-btn-group {
    display: grid;
    grid-template-columns: 1fr;
    gap: 12px;
    margin-top: 25px;
}

@media (min-width: 480px) {
    .mortgage-btn-group {
        grid-template-columns: 1fr 1fr;
    }
}

.mortgage-btn {
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    text-align: center;
}

.mortgage-btn-calculate {
    background: #3498db;
    color: white;
}

.mortgage-btn-calculate:hover {
    background: #2980b9;
}

.mortgage-btn-reset {
    background: #95a5a6;
    color: white;
}

.mortgage-btn-reset:hover {
    background: #7f8c8d;
}

.mortgage-result-card {
    background: white;
    border-radius: 8px;
    padding: 18px;
    margin-bottom: 15px;
    border-left: 4px solid #3498db;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.mortgage-result-card.highlight {
    background: linear-gradient(135deg, #3498db, #2c3e50);
    color: white;
    border-left-color: #2c3e50;
}

.mortgage-result-title {
    font-size: 0.8em;
    color: #7f8c8d;
    margin-bottom: 5px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.mortgage-result-card.highlight .mortgage-result-title {
    color: #ecf0f1;
}

.mortgage-result-value {
    font-size: 1.4em;
    font-weight: 700;
    color: #2c3e50;
}

.mortgage-result-card.highlight .mortgage-result-value {
    color: white;
}

.mortgage-summary-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 12px;
    margin: 20px 0;
}

@media (min-width: 480px) {
    .mortgage-summary-grid {
        grid-template-columns: 1fr 1fr;
    }
}

.mortgage-summary-item {
    background: #f8f9fa;
    padding: 12px;
    border-radius: 6px;
    text-align: center;
    border: 1px solid #e9ecef;
}

.mortgage-summary-value {
    font-size: 1.1em;
    font-weight: 600;
    color: #2c3e50;
    margin-top: 5px;
}

.mortgage-table-container {
    overflow-x: auto;
    margin: 20px 0;
    border-radius: 6px;
    border: 1px solid #e9ecef;
}

.mortgage-breakdown-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.85em;
    min-width: 500px;
}

.mortgage-breakdown-table th {
    background: #34495e;
    color: white;
    padding: 10px 12px;
    text-align: right;
    font-weight: 600;
    font-size: 0.9em;
}

.mortgage-breakdown-table td {
    padding: 8px 12px;
    text-align: right;
    border-bottom: 1px solid #ecf0f1;
}

.mortgage-breakdown-table tr:nth-child(even) {
    background: #f8f9fa;
}

.mortgage-note {
    background: #fff8e1;
    padding: 12px 15px;
    border-radius: 6px;
    margin-top: 20px;
    font-size: 0.85em;
    border-left: 4px solid #ffc107;
    color: #856404;
}

.mortgage-calc-footer {
    text-align: center;
    margin-top: 25px;
    padding-top: 15px;
    border-top: 1px solid #e9ecef;
    color: #7f8c8d;
    font-size: 0.8em;
}

.mortgage-hidden {
    display: none;
}

.mortgage-error {
    background: #f8d7da;
    color: #721c24;
    padding: 10px 15px;
    border-radius: 6px;
    margin-bottom: 15px;
    border-left: 4px solid #dc3545;
    font-size: 0.9em;
}
</style>

<div class="mortgage-calc-container">
    <div class="mortgage-calc-header">
        <h2>Mortgage Payment Calculator</h2>
        <p>Calculate your monthly payments and see the amortization schedule</p>
    </div>

    <div class="mortgage-calc-grid">
        <div class="mortgage-input-section">
            <h3 class="mortgage-section-title">Loan Information</h3>
            
            <div class="mortgage-form-group">
                <label for="mc_loan_amount">Home Price ($)</label>
                <input type="number" id="mc_loan_amount" value="350000" min="0" step="1000">
            </div>
            
            <div class="mortgage-form-group">
                <label for="mc_down_payment">Down Payment ($)</label>
                <input type="number" id="mc_down_payment" value="70000" min="0" step="1000">
            </div>
            
            <div class="mortgage-form-group">
                <label for="mc_interest_rate">Interest Rate (%)</label>
                <input type="number" id="mc_interest_rate" value="6.5" min="0" max="20" step="0.01">
            </div>
            
            <div class="mortgage-form-group">
                <label for="mc_loan_term">Loan Term (Years)</label>
                <select id="mc_loan_term">
                    <option value="10">10 Years</option>
                    <option value="15">15 Years</option>
                    <option value="20">20 Years</option>
                    <option value="30" selected>30 Years</option>
                </select>
            </div>
            
            <h3 class="mortgage-section-title" style="margin-top: 25px;">Additional Costs</h3>
            
            <div class="mortgage-form-group">
                <label for="mc_property_tax">Annual Property Tax ($)</label>
                <input type="number" id="mc_property_tax" value="3500" min="0" step="100">
            </div>
            
            <div class="mortgage-form-group">
                <label for="mc_home_insurance">Annual Home Insurance ($)</label>
                <input type="number" id="mc_home_insurance" value="1200" min="0" step="100">
            </div>
            
            <div class="mortgage-form-group">
                <label for="mc_pmi">PMI Rate (%)</label>
                <input type="number" id="mc_pmi" value="0.5" min="0" max="5" step="0.01">
            </div>
            
            <div class="mortgage-form-group">
                <label for="mc_extra_payment">Extra Monthly Payment ($)</label>
                <input type="number" id="mc_extra_payment" value="0" min="0" step="10">
            </div>
            
            <div class="mortgage-btn-group">
                <button type="button" class="mortgage-btn mortgage-btn-calculate" onclick="calculateMortgage()">
                    Calculate Payments
                </button>
                <button type="button" class="mortgage-btn mortgage-btn-reset" onclick="resetCalculator()">
                    Reset Calculator
                </button>
            </div>
        </div>
        
        <div class="mortgage-results-section">
            <h3 class="mortgage-section-title">Calculation Results</h3>
            
            <div id="mc_error_message" class="mortgage-hidden mortgage-error"></div>
            
            <div id="mc_results_placeholder">
                <div class="mortgage-result-card">
                    <div class="mortgage-result-title">Ready to Calculate</div>
                    <div class="mortgage-result-value">Enter your loan details</div>
                    <p style="margin-top: 12px; color: #7f8c8d; font-size: 0.9em;">
                        Fill out the form with your mortgage information and click "Calculate Payments" to see your detailed payment breakdown.
                    </p>
                </div>
            </div>
            
            <div id="mc_results_container" class="mortgage-hidden">
                <div class="mortgage-result-card highlight">
                    <div class="mortgage-result-title">Total Monthly Payment</div>
                    <div class="mortgage-result-value" id="mc_total_monthly">$0.00</div>
                </div>
                
                <div class="mortgage-summary-grid">
                    <div class="mortgage-summary-item">
                        <div>Principal & Interest</div>
                        <div class="mortgage-summary-value" id="mc_monthly_pi">$0.00</div>
                    </div>
                    <div class="mortgage-summary-item">
                        <div>Property Tax</div>
                        <div class="mortgage-summary-value" id="mc_monthly_tax">$0.00</div>
                    </div>
                    <div class="mortgage-summary-item">
                        <div>Home Insurance</div>
                        <div class="mortgage-summary-value" id="mc_monthly_insurance">$0.00</div>
                    </div>
                    <div class="mortgage-summary-item">
                        <div>PMI</div>
                        <div class="mortgage-summary-value" id="mc_monthly_pmi">$0.00</div>
                    </div>
                </div>
                
                <div class="mortgage-result-card">
                    <div class="mortgage-result-title">Total Interest Paid</div>
                    <div class="mortgage-result-value" id="mc_total_interest">$0.00</div>
                </div>
                
                <div class="mortgage-result-card">
                    <div class="mortgage-result-title">Total Amount Paid</div>
                    <div class="mortgage-result-value" id="mc_total_paid">$0.00</div>
                </div>
                
                <div class="mortgage-result-card">
                    <div class="mortgage-result-title">Payoff Date</div>
                    <div class="mortgage-result-value" id="mc_payoff_date">-</div>
                </div>
                
                <h3 class="mortgage-section-title" style="margin-top: 25px;">Amortization Schedule (First 12 Months)</h3>
                <div class="mortgage-table-container">
                    <table class="mortgage-breakdown-table" id="mc_amortization_table">
                        <thead>
                            <tr>
                                <th>Month</th>
                                <th>Payment</th>
                                <th>Principal</th>
                                <th>Interest</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody id="mc_amortization_body">
                            <!-- Results will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="mortgage-note">
                <strong>Note:</strong> This calculator provides estimates for educational purposes. Actual loan terms may vary based on credit score, lender policies, and other factors.
            </div>
        </div>
    </div>
    
    <div class="mortgage-calc-footer">
        &copy; 2025 Mortgage Calculator | Powered by AskQuora.com
    </div>
</div>

<script>
function calculateMortgage() {
    // Get input values
    const loanAmount = parseFloat(document.getElementById('mc_loan_amount').value) || 0;
    const downPayment = parseFloat(document.getElementById('mc_down_payment').value) || 0;
    const interestRate = parseFloat(document.getElementById('mc_interest_rate').value) || 0;
    const loanTerm = parseInt(document.getElementById('mc_loan_term').value) || 30;
    const propertyTax = parseFloat(document.getElementById('mc_property_tax').value) || 0;
    const homeInsurance = parseFloat(document.getElementById('mc_home_insurance').value) || 0;
    const pmiRate = parseFloat(document.getElementById('mc_pmi').value) || 0;
    const extraPayment = parseFloat(document.getElementById('mc_extra_payment').value) || 0;
    
    // Validate inputs
    const errorElement = document.getElementById('mc_error_message');
    if (downPayment >= loanAmount) {
        errorElement.textContent = 'Down payment cannot be greater than or equal to loan amount.';
        errorElement.classList.remove('mortgage-hidden');
        return;
    }
    
    if (loanAmount <= 0 || interestRate <= 0 || loanTerm <= 0) {
        errorElement.textContent = 'Please enter valid loan amount, interest rate, and loan term.';
        errorElement.classList.remove('mortgage-hidden');
        return;
    }
    
    errorElement.classList.add('mortgage-hidden');
    
    // Calculate mortgage
    const principal = loanAmount - downPayment;
    const monthlyRate = (interestRate / 100) / 12;
    const totalPayments = loanTerm * 12;
    
    // Calculate monthly mortgage payment
    let monthlyMortgage;
    if (monthlyRate > 0) {
        monthlyMortgage = principal * 
            (monthlyRate * Math.pow(1 + monthlyRate, totalPayments)) / 
            (Math.pow(1 + monthlyRate, totalPayments) - 1);
    } else {
        monthlyMortgage = principal / totalPayments;
    }
    
    // Additional monthly costs
    const monthlyTax = propertyTax / 12;
    const monthlyInsurance = homeInsurance / 12;
    const monthlyPmi = (pmiRate > 0 && downPayment / loanAmount < 0.2) ? 
                      (principal * (pmiRate / 100)) / 12 : 0;
    
    const totalMonthly = monthlyMortgage + monthlyTax + monthlyInsurance + monthlyPmi;
    
    // Generate amortization schedule
    const schedule = generateAmortizationSchedule(principal, monthlyRate, totalPayments, monthlyMortgage, extraPayment);
    const totalInterest = schedule.reduce((sum, payment) => sum + payment.interest, 0);
    const totalPaid = (totalMonthly * totalPayments) + downPayment;
    
    // Calculate payoff date
    const payoffDate = new Date();
    payoffDate.setMonth(payoffDate.getMonth() + schedule.length);
    
    // Update UI
    document.getElementById('mc_results_placeholder').classList.add('mortgage-hidden');
    document.getElementById('mc_results_container').classList.remove('mortgage-hidden');
    
    document.getElementById('mc_total_monthly').textContent = formatCurrency(totalMonthly);
    document.getElementById('mc_monthly_pi').textContent = formatCurrency(monthlyMortgage);
    document.getElementById('mc_monthly_tax').textContent = formatCurrency(monthlyTax);
    document.getElementById('mc_monthly_insurance').textContent = formatCurrency(monthlyInsurance);
    document.getElementById('mc_monthly_pmi').textContent = formatCurrency(monthlyPmi);
    document.getElementById('mc_total_interest').textContent = formatCurrency(totalInterest);
    document.getElementById('mc_total_paid').textContent = formatCurrency(totalPaid);
    document.getElementById('mc_payoff_date').textContent = payoffDate.toLocaleDateString('en-US', { 
        year: 'numeric', 
        month: 'long' 
    });
    
    // Update amortization table
    updateAmortizationTable(schedule.slice(0, 12));
}

function generateAmortizationSchedule(principal, monthlyRate, totalPayments, monthlyPayment, extraPayment) {
    let balance = principal;
    const schedule = [];
    
    for (let payment = 1; payment <= totalPayments && balance > 0; payment++) {
        const interest = balance * monthlyRate;
        const principalPayment = monthlyPayment - interest;
        
        // Apply extra payment
        const totalPrincipal = principalPayment + extraPayment;
        const actualPrincipal = Math.min(totalPrincipal, balance);
        
        balance -= actualPrincipal;
        
        schedule.push({
            paymentNumber: payment,
            payment: monthlyPayment + extraPayment,
            principal: actualPrincipal,
            interest: interest,
            balance: Math.max(balance, 0)
        });
        
        if (balance <= 0) break;
    }
    
    return schedule;
}

function updateAmortizationTable(schedule) {
    const tbody = document.getElementById('mc_amortization_body');
    tbody.innerHTML = '';
    
    schedule.forEach(payment => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${payment.paymentNumber}</td>
            <td>${formatCurrency(payment.payment)}</td>
            <td>${formatCurrency(payment.principal)}</td>
            <td>${formatCurrency(payment.interest)}</td>
            <td>${formatCurrency(payment.balance)}</td>
        `;
        tbody.appendChild(row);
    });
}

function formatCurrency(amount) {
    return '$' + amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
}

function resetCalculator() {
    // Reset form values
    document.getElementById('mc_loan_amount').value = '350000';
    document.getElementById('mc_down_payment').value = '70000';
    document.getElementById('mc_interest_rate').value = '6.5';
    document.getElementById('mc_loan_term').value = '30';
    document.getElementById('mc_property_tax').value = '3500';
    document.getElementById('mc_home_insurance').value = '1200';
    document.getElementById('mc_pmi').value = '0.5';
    document.getElementById('mc_extra_payment').value = '0';
    
    // Reset results
    document.getElementById('mc_error_message').classList.add('mortgage-hidden');
    document.getElementById('mc_results_placeholder').classList.remove('mortgage-hidden');
    document.getElementById('mc_results_container').classList.add('mortgage-hidden');
}

// Initialize calculator on load
document.addEventListener('DOMContentLoaded', function() {
    // Add input validation
    const inputs = document.querySelectorAll('.mortgage-calc-container input[type="number"]');
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            if (this.value < 0) this.value = 0;
        });
    });
});
</script>
</div>