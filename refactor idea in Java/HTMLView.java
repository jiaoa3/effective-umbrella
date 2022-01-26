import java.util.List;

public class HTMLView implements IPlayersView {
    @Override
    public void display(List<Player> players) {
        System.out.println(players);
    }
}
