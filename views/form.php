<form method="POST" enctype="multipart/form-data">
    <label for="fullName">Nom Complet</label>
    <input type="text" id="fullName" name="fullName" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Téléphone:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="position">Titre de l'offre:</label>
    <input type="text" id="position" name="position" value="<?= isset($_GET['poste']) ? htmlspecialchars($_GET['poste']) : '' ?>" required>

    <label for="resume">CV:</label>
    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>

    <label for="coverLetter">Lettre de motivation:</label>
    <textarea id="coverLetter" name="coverLetter" rows="5" required></textarea>

    <button type="submit">Soumettre ma candidature</button>
</form>