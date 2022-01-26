import java.util.List;
import java.util.Optional;

public class PlayersObject implements IReadWritePlayers {
    private List<Player> players;

    @Override
    public void readPlayers(String source, Optional<String> filename) {
        players = IOHelper.read(source, filename);
    }

    @Override
    public void addPlayer(String source, Player player, Optional<String> filename) {

    }

    @Override
    public void display(boolean isCLI, String source, Optional<String> filename) {
        readPlayers(source, filename);
        ViewHelper.display(isCLI, players);
    }
}
