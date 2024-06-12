MILESTONE 1

Creo 2 pagine:
form:
- creo un form collegato con la pagina elabora con un input number e un button select.
elabora:
- prendo il dato scelto dall'utente.
- tramite un ciclo for stampo una password composta da tante x quanto l'input utente ha stabilito.


MILESTONE 2

Lavoro nel file elabora
Creo un array di stringe.
[0] --> lettere alfabeto minuscole
[1] --> lettere alfabeto maiuscole
[2] --> numeri da 1 a 9
[3] --> caratteri speciali

creo un ciclo for dove:
selezione --> va a prendere un numero casuale tra 0 e 3 (le stringhe nell'array)
last --> va a prendere la lunghezza della stringa
password --> è il risultato di prendere una stringa casuale e stampare un elemento casuale al suo interno ripetuto per la lunghezza dell'input utente.

MILESTONE 3
Fate un pò di refactoring:
Unite form e visualizzazione della password in un'unica pagina php: vi basta controllate se nel $_GET abbiamo le selezioni dell'utente oppure no e in base a questo saprete cosa fare.
Spostate la logica che crea la password in una funzione che in base agli argomenti passati restituisce una password
Spostate la function in un file esterno da includere

Obiettivo: leggibilità, manutenibilità e accumulare maggiore pratica con form e funzioni.


BONUS
Nel form dare all'utente la possibilità di scegliere quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
Questo vuol dire che il "dizionario" dei caratteri consentiti andrà popolato in base alle scelte dell'utente.

Obiettivo: divertirvi e sperimentare.

