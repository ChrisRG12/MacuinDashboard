import numpy as np

class LogisticRegression:
    
    def __init__(self, learning_rate=0.0001, num_iterations=1000):
        self.learning_rate = learning_rate
        self.num_iterations = num_iterations
        self.weights = None
        self.bias = None

    def fit(self, X, y):
        # Inicializar los pesos y el bias con ceros
        self.weights = np.zeros((X.shape[1],1))
        self.bias = 0
        y = np.resize(y, (X.shape[0],1))
        X = (X - np.min(X, axis=0)) / (np.max(X, axis=0) - np.min(X, axis=0))

        iter_ = []
        errores = []

        # Gradiente descendiente para optimizar los pesos y el bias
        for i in range(self.num_iterations):
            z = np.dot(X,self.weights)
            y_pred = self.sigmoid(z)
            error = y_pred - y
            dw = np.dot(X.T, error)
            #db = np.sum(dz) / len(X)
            self.weights -= self.learning_rate * (1/X.shape[0])*dw
            #self.bias -= self.learning_rate * db
            iter_.append(i)
            errores.append(self.logistic_regression_error(y, y_pred)[0])
        return (iter_, errores)

    def predict(self, X):
        z = np.dot(X, self.weights) + self.bias
        y_pred = self.sigmoid(z)
        y_pred_class = np.round(y_pred)
        return y_pred_class

    def logistic_regression_error(self, y, y_pred):
        """
        Esta función calcula la función de error de la regresión logística.

        Args:
        y: ndarray de forma (n,), etiquetas reales.
        y_pred: ndarray de forma (n,), etiquetas predichas.

        Returns:
        error: float, la función de error de la regresión logística.
        """
        n = len(y)
        error = 1/n * (np.dot(y.T,np.log(y_pred)) - np.dot((1-y).T,np.log(1-y_pred)))
        return error[0]

    def sigmoid(self, z):
        """
        Función sigmoide truncada para evitar el error "overflow encountered in exp".
        """
        s = np.clip(z, -500, 500)  # Evita la sobrecarga en la exponencial
        s = 1 / (1 + np.exp(-z))   # Calcula la función sigmoide
        s = np.clip(s, -0.999999999999999, 0.999999999999999)  # Trunca los valores en los extremos
        return s