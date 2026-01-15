<!-- Vendivel, Jerico
    CYB - 201 -->

<?php
include 'classes/Account.php';
include 'classes/Customer.php';
include 'includes/header.php';

/* Step 7: Four accounts */
$accounts = [
    new Account("2001", "Savings Account", 12000),
    new Account("2002", "Checking Account", -3500),
    new Account("2003", "Payroll Account", 8900),
    new Account("2004", "Time Deposit", 45000)
];

/* Step 8: Customer object */
$customer = new Customer("Jerico", "Vendivel", $accounts);
?>

<section>
    <h2>Customer: <?= $customer->getFullName(); ?></h2>

    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>

        <?php foreach ($customer->getAccounts() as $account): ?>
            <tr>
                <td><?= $account->getAccountNumber(); ?></td>
                <td><?= $account->getAccountType(); ?></td>

                <?php if ($account->getBalance() >= 0): ?>
                    <td class="credit">
                        ₱<?= number_format($account->getBalance(), 2); ?>
                    </td>
                <?php else: ?>
                    <td class="overdrawn">
                        ₱<?= number_format($account->getBalance(), 2); ?>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</section>

<?php include 'includes/footer.php'; ?>
