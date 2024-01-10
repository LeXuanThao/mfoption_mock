import math
import random

"""
    https://gptcall.net/chat?url=https%3A%2F%2Fraw.githubusercontent.com%2Ffriuns2%2FLeaked-GPTs%2Fmain%2Fgpts%2FUniversalPrimer.md#chatID=%222024-01-18T06%3A03%3A54.194Z%22
"""
class IndexManager:
    def __init__(self):
        self.indexes = []

    def createIndex(self, indexSymbol, indexName):
        index = Index(indexSymbol, indexName)
        self.indexes.append(index)

    def getIndex(self, indexSymbol):
        for index in self.indexes:
            if index.symbol == indexSymbol:
                return index
        return None

    def updateIndex(self, indexSymbol, updatedIndexName):
        index = self.getIndex(indexSymbol)
        if index:
            index.indexName = updatedIndexName

    def deleteIndex(self, indexSymbol):
        index = self.getIndex(indexSymbol)
        if index:
            self.indexes.remove(index)


class OptionManager:
    def __init__(self):
        self.options = []

    def createOption(self, optionSymbol, optionType, underlyingIndex, expirationDate, strikePrice):
        option = Option(optionSymbol, optionType, underlyingIndex, expirationDate, strikePrice)
        self.options.append(option)

    def getOption(self, optionSymbol):
        for option in self.options:
            if option.symbol == optionSymbol:
                return option
        return None

    def updateOption(self, optionSymbol, updatedStrikePrice):
        option = self.getOption(optionSymbol)
        if option:
            option.strikePrice = updatedStrikePrice

    def deleteOption(self, optionSymbol):
        option = self.getOption(optionSymbol)
        if option:
            self.options.remove(option)


class Index:
    def __init__(self, symbol, indexName):
        self.symbol = symbol
        self.indexName = indexName


class Option:
    def __init__(self, symbol, optionType, underlyingIndex, expirationDate, strikePrice):
        self.symbol = symbol
        self.optionType = optionType
        self.underlyingIndex = underlyingIndex
        self.expirationDate = expirationDate
        self.strikePrice = strikePrice


class UserManager:
    def __init__(self):
        self.users = []

    def createUser(self, userId, username, password, name, email, contactInfo):
        user = User(userId, username, password, name, email, contactInfo)
        self.users.append(user)

    def getUser(self, userId):
        for user in self.users:
            if user.userId == userId:
                return user
        return None

    def updateUser(self, userId, updatedUser):
        user = self.getUser(userId)
        if user:
            user.username = updatedUser.username
            user.password = updatedUser.password
            user.name = updatedUser.name
            user.email = updatedUser.email
            user.contactInfo = updatedUser.contactInfo

    def deleteUser(self, userId):
        user = self.getUser(userId)
        if user:
            self.users.remove(user)


class User:
    def __init__(self, userId, username, password, name, email, contactInfo):
        self.userId = userId
        self.username = username
        self.password = password
        self.name = name
        self.email = email
        self.contactInfo = contactInfo
        
class OrderManager:
    def __init__(self):
        self.orders = []

    def createOrder(self, orderId, userId, symbol, orderType, quantity, price):
        order = Order(orderId, userId, symbol, orderType, quantity, price)
        self.orders.append(order)

    def getOrder(self, orderId):
        for order in self.orders:
            if order.orderId == orderId:
                return order
        return None

    def updateOrder(self, orderId, updatedOrder):
        order = self.getOrder(orderId)
        if order:
            order.userId = updatedOrder.userId
            order.symbol = updatedOrder.symbol
            order.orderType = updatedOrder.orderType
            order.quantity = updatedOrder.quantity
            order.price = updatedOrder.price

    def deleteOrder(self, orderId):
        order = self.getOrder(orderId)
        if order:
            self.orders.remove(order)


class Order:
    def __init__(self, orderId, userId, symbol, orderType, quantity, price):
        self.orderId = orderId
        self.userId = userId
        self.symbol = symbol
        self.orderType = orderType
        self.quantity = quantity
        self.price = price
        
class PricingGenerator:
    """
    stock_prices = [120.0, 125.0, 130.0, 135.0, 140.0]  # Example stock prices
    interest_rate = 0.05  # Example interest rate
    volatility = 0.3  # Example volatility

    pricing_generator = PricingGenerator(stock_prices, interest_rate, volatility)
    current_stock_price = 130.0
    strike_price = 132.5
    time_to_expiration = 0.5

    option_price = pricing_generator.generateOptionPrice(current_stock_price, strike_price, time_to_expiration)
    print(f"The generated option price is: {option_price}")
    """
    def __init__(self, stock_prices, interest_rate, volatility):
        self.stock_prices = stock_prices
        self.interest_rate = interest_rate
        self.volatility = volatility

    def generateOptionPrice(self, stock_price, strike_price, time_to_expiration):
        d1 = (math.log(stock_price/strike_price) + ((self.interest_rate + self.volatility**2/2) * time_to_expiration)) / (self.volatility * math.sqrt(time_to_expiration))
        d2 = d1 - self.volatility * math.sqrt(time_to_expiration)

        call_price = stock_price * self.normalCDF(d1) - strike_price * math.exp(-self.interest_rate * time_to_expiration) * self.normalCDF(d2)
        put_price = strike_price * math.exp(-self.interest_rate * time_to_expiration) * self.normalCDF(-d2) - stock_price * self.normalCDF(-d1)

        return round(random.uniform(call_price, put_price), 2)

    def normalCDF(self, x):
        return (1.0 + math.erf(x / math.sqrt(2.0))) / 2.0

