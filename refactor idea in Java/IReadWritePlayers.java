import java.util.Optional;

public interface IReadWritePlayers {
    void readPlayers(String source, Optional<String> filename);
    void addPlayer(String source, Player player, Optional<String> filename);
    void display(boolean isCLI, String source, Optional<String> filename);
}
