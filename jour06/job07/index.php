def bubblesort(tab, croissant=True):
    """
    Trie un tableau de chaînes de caractères en utilisant l'algorithme du tri à bulles.

    :param tab: Liste de chaînes de caractères à trier
    :param croissant: Booléen, True pour un tri croissant, False pour un tri décroissant
    :return: Liste triée selon l'ordre spécifié
    """
    n = len(tab)
    for i in range(n):
        for j in range(0, n-i-1):
            if (croissant and tab[j] > tab[j+1]) or (not croissant and tab[j] < tab[j+1]):
                # Échange des éléments
                tab[j], tab[j+1] = tab[j+1], tab[j]
    return tab

# Exemple d'utilisation
if __name__ == "__main__":
    tableau = ["orange", "pomme", "banane", "kiwi"]
    print("Tri croissant :", bubblesort(tableau, croissant=True))
    print("Tri décroissant :", bubblesort(tableau, croissant=False))
