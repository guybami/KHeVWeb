


-- selectAllExpenses

BEGIN
    SELECT khev_Expense.*, khev_Event.title AS eventTitle
    FROM khev_Expense 
	LEFT JOIN  khev_Event 
	ON  khev_Event.eventId =  khev_Expense.eventId
	ORDER BY khev_Expense.transactionDate  DESC;
END


-- selectAllIncomes

BEGIN
    SELECT khev_Income.*, khev_Event.title AS eventTitle
    FROM khev_Income 
	LEFT JOIN  khev_Event 
	ON  khev_Event.eventId =  khev_Income.eventId
	ORDER BY khev_Income.transactionDate  DESC;
END

-- selectAllEntitiesRecordsCount

